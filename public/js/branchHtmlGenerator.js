window.addEventListener('load', () => {
    const clientId = document.getElementById('clientId').innerText;
    const urlJson = '../../branch/branch-list-json/' + clientId;
    const roleUser = document.getElementById('rolesUser').innerText;
    const idUser = document.getElementById('idUser').innerText.replace(/[[\]]/g,'');

    httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', urlJson , true);
    httpRequest.send();

    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            const data = httpRequest.response;
            let dataReformat = data.replace(/&quot;/ig,'"');
            let branches = JSON.parse(dataReformat);
            let branchList = document.getElementById('branchList');

            for (let i = 0; i < branches.length; i++) {
                let userHttpRequest = new XMLHttpRequest();
                let idUrl = '../../branch/user-id-json/' + branches[i].id;
                userHttpRequest.open('POST', idUrl, true);
                userHttpRequest.send();

                let branchUserId;

                userHttpRequest.onreadystatechange = function() {
                    if (userHttpRequest.readyState === XMLHttpRequest.DONE) {
                        let dataUserId = userHttpRequest.response;
                        let dataUserIdReformat = dataUserId.replace(/&quot;/ig,'"');
                        let user = JSON.parse(dataUserIdReformat);
                        branchUserId = user.id;

                        let roleAdmin = roleUser.indexOf('ROLE_ADMIN');
                        let roleClient = roleUser.indexOf('ROLE_CLIENT');
                        let roleBranch = roleUser.indexOf('ROLE_BRANCH');
                        let logoUrl = logoUrlGenerator(branches[i]);
                        let installPerm = installPermGenerator(branches[i]);
                        let checked = checkedGenerator(branches[i]);
                        let secureSubmission = secureSubmissionGenerator(branches[i]);
                        let clientGrantsForm = clientGrantsFormGenerator(branches[i], checked, secureSubmission, roleAdmin);

                        if (roleAdmin > -1 || roleClient > -1 || (roleBranch > -1 && parseInt(branchUserId) === parseInt(idUser))) {
                            let branchElement= branchHtmlGenerator(branches[i], logoUrl, installPerm, checked, secureSubmission, clientGrantsForm);
                            let installPermElement = '';
                            if (branches[i].installPerm !== null) {
                                let installPermForm1 = installPerm1FormGenerator(branches[i], roleAdmin);
                                let installPermForm2 = installPermForm2Generator(branches[i], roleAdmin);
                                installPermElement = installPermHtmlGenerator(branches[i], installPermForm1, installPermForm2);
                            }
                            branchList.innerHTML += `<div class="branch">
                                                        ${branchElement}
                                                        ${installPermElement}
                                                    </div>`;
                        }
                        const paginationNumbers = document.getElementById("pagination-numbers");
                        const paginatedList = document.getElementById("branchList");
                        const listItems = [...branchList.getElementsByClassName('branch')];

                        const paginationLimit = 2;
                        const pageCount = Math.ceil(listItems.length / paginationLimit);
                        let currentPage;

                        getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
                        setCurrentPage(1, paginationLimit, listItems);
                    }
                }
            }
        } else {
            // pas encore prête
        }
    };
})

function logoUrlGenerator(branch) {
    let logoUrl;
    if (branch.client.logoUrl !== null) {
        logoUrl = branch.client.logoUrl;
    } else {
        logoUrl = '../../images/logo-100X100.png';
    }
    return logoUrl;
}

function installPermGenerator(branch) {
    let installPerm;
    if(branch.installPerm !== null) {
        installPerm = `<p class="px-2"><u>Id des permissions</u> : ${branch.installPerm.id}</p>`;
    } else {
        installPerm = '';
    }

    return installPerm;
}

function checkedGenerator(branch) {
    let checked;
    if (branch.clientGrants !== null) {
        if(branch.clientGrants.active) {
            checked = 'checked';
        }
    } else {
        checked = '';
    }
    return checked;
}

function secureSubmissionGenerator(branch) {
    let secureSubmission = '';
    if (branch.clientGrants !== null) {
        if (branch.clientGrants.active) {
            secureSubmission = `if (confirm('Êtes-vous sûr de vouloir désactiver l\\'intégration de ${branch.client.name} au club ${branch.name} ?')) { submit();}`;
        } else {
            secureSubmission = `if (confirm('Êtes-vous sûr de vouloir activer l\\'intégration de ${branch.client.name} au club ${branch.name} ?')) { submit();}`;
        }
    }
    return secureSubmission;
}

function clientGrantsFormGenerator(branch, checked, secureSubmission, roleAdmin) {
    let clientsGrantsForm;
    let disabled;
    if (roleAdmin >= 0) {
        disabled = '';
    } else {
        disabled = 'disabled';
    }
    if (branch.clientGrants !== null) {
        clientsGrantsForm = `<div class="row px-2"><form action="../../admin/update-client-grants/${branch.clientGrants.id}" method="POST">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="active" ${checked} onclick="${secureSubmission}" ${disabled}>
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                    </form>
                </div>`;
    } else {
        clientsGrantsForm = '';
    }
    return clientsGrantsForm;
}

function installPerm1FormGenerator(branch, roleAdmin) {
    let disabled;
    let membersReadChecked = '';
    let membersWriteChecked = '';
    let membersAddChecked = '';
    let membersProductsAdd = '';
    let membersPaymentSchedulesRead = '';

    if (roleAdmin >= 0) {
        disabled = '';
    } else {
        disabled = 'disabled';
    }
    if (branch.installPerm.membersRead) {
        membersReadChecked = 'checked';
    }
    if (branch.installPerm.membersWrite) {
        membersWriteChecked = 'checked';
    }
    if (branch.installPerm.membersAddChecked) {
        membersAddChecked = 'checked';
    }
    if (branch.installPerm.membersProductsAdd) {
        membersProductsAdd = 'checked';
    }
    if (branch.installPerm.membersPaymentSchedulesRead) {
        membersPaymentSchedulesRead = 'checked';
    }

    let installPermForm = `<form class="mb-3" action="../../admin/update-install-perm1/${branch.installPerm.id}" method="POST" target="_blank">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersRead" name="membersRead"
                                           ${membersReadChecked} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersRead">membersRead</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersWrite" name="membersWrite"
                                           ${membersWriteChecked} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersWrite">membersWrite</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersAdd" name="membersAdd"
                                           ${membersAddChecked} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersAdd">membersAdd</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersProductsAdd" name="membersProductsAdd"
                                           ${membersProductsAdd} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersProductsAdd">membersProductsAdd</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersPaymentSchedulesRead" name="membersPaymentSchedulesRead"
                                           ${membersPaymentSchedulesRead} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersPaymentSchedulesRead">membersPaymentSchedulesRead</label>
                                </div>
                                </form>
                                </div>`;

    return installPermForm;
}

function installPermForm2Generator(branch, roleAdmin) {
    let disabled;
    let membersStatisticRead = '';
    let membersSubscriptionRead = '';
    let membersSchedulesRead = '';
    let membersSchedulesWrite = '';
    let paymentDayRead = '';

    if (roleAdmin >= 0) {
        disabled = '';
    } else {
        disabled = 'disabled';
    }

    if (branch.installPerm.membersStatisticRead) {
        membersStatisticRead = 'checked';
    }
    if (branch.installPerm.membersSubscriptionRead) {
        membersSubscriptionRead = 'checked';
    }
    if (branch.installPerm.membersSchedulesRead) {
        membersSchedulesRead = 'checked';
    }
    if (branch.installPerm.membersSchedulesWrite) {
        membersSchedulesWrite = 'checked';
    }
    if (branch.installPerm.paymentDayRead) {
        paymentDayRead = 'checked';
    }

    let installPermForm = `<div class="col-12 col-md-6 mb-2">
                            <form class="mb-3" action="../../admin/update-install-perm2/${branch.installPerm.id}" method="POST" target="_blank">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersStatisticRead" name="membersStatisticRead"
                                           ${membersStatisticRead} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersStatisticRead">membersStatisticRead</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersSubscriptionRead" name="membersSubscriptionRead"
                                           ${membersSubscriptionRead} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersSubscriptionRead">membersSubscriptionRead</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersSchedulesRead" name="membersSchedulesRead"
                                           ${membersSchedulesRead} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersSchedulesRead">membersSchedulesRead</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="membersSchedulesWrite" name="membersSchedulesWrite"
                                           ${membersSchedulesWrite} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="membersSchedulesWrite">membersSchedulesWrite</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" class="form-check-input" id="paymentDayRead" name="paymentDayRead"
                                           ${paymentDayRead} ${disabled} onclick="submit()">
                                    <label class="form-check-label" for="paymentDayRead">paymentDayRead</label>
                                </div>
                        </form>`;

    return installPermForm;
}

function branchHtmlGenerator(branch, logoUrl, installPerm, checked, secureSubmission, clientGrantsForm) {
    let branchHtml = `<div class="row d-flex justify-content-center gx-5 px-sm-5">
    <div class="col-12">
        <div class="bg-light yellow-border rounded mt-2 mt-sm-3 p-3">
            <div class="row mb-2">
                <div class="col-5 col-lg-2 col-md-3 col-sm-4 mb-2">
                    <img src="${logoUrl}" alt="logo" width="100" height="100">
                </div>
                <div class="col mb-2">
                    <h2 class="mb-1 px-2 h5 font-title"><b>${branch.client.name} - ${branch.name}</b></h2>
                    <p class="mb-1 px-2"><u>Id de la structure</u> : <span class="branchId">${branch.id}</span></p>
                    ${installPerm}
                </div>
            </div>
                ${clientGrantsForm}
        </div>
    </div>
</div>`;

    return branchHtml;
}

function installPermHtmlGenerator(branch, installPermForm1, installPermForm2) {
    let installPermHtml = `<div class="row d-flex justify-content-center gx-5 px-sm-5">
        <div class="col-12">
            <div class="bg-light yellow-border rounded mt-1 mb-2 mb-sm-3 p-3 pb-0">
                <div class="row">
                    <div class=" d-flex justify-content-end">
                        <p data-bs-toggle="collapse" data-bs-target="#${branch.name.replace(/ /g,'')}" aria-expanded="false"
                           aria-controls="${branch.name.replace(/ /g,'')}" onclick="plusMinusChange()">
                            Permissions
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                 class="bi bi-plus-circle plus" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                 class="bi bi-dash-circle minus" style="display: none" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="row collapse" id="${branch.name.replace(/ /g,'')}">
                    <div class="col-12 col-md-6">
                        ${installPermForm1}
                        ${installPermForm2}
                    </div>
                </div>
            </div>
        </div>
    </div>`;

    return installPermHtml;
}