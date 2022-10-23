window.addEventListener('load', () => {
    const clientId = document.getElementById('clientId').innerText;
    const urlJson = 'http://ecf.localhost/admin/branch-list-json/' + clientId;
    console.log(urlJson);

    httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            const data = httpRequest.response;
            let dataReformat = data.replace(/&quot;/ig,'"');
            let branches = JSON.parse(dataReformat);
            let branchList = document.getElementById('branchList');

            for (let i = 0; i < branches.length; i++) {
                branchList.innerHTML += branchHtmlGenerator(branches[i]);
                if (branches[i].installPerm) {
                    branchList.innerHTML += installPermHtmlGenerator(branches[i]);
                }
            }

            const paginationNumbers = document.getElementById("pagination-numbers");
            const paginatedList = document.getElementById("clientList");
            const listItems = [...branchList.getElementsByClassName('branch')];
            const nextButton = document.getElementById("next-button");
            const prevButton = document.getElementById("prev-button");

            const paginationLimit = 6;
            const pageCount = Math.ceil(listItems.length / paginationLimit);
            let currentPage;

            getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
            setCurrentPage(1, paginationLimit, listItems);
        } else {
            // pas encore prête
        }
    };

    httpRequest.open('POST', urlJson , true);
    httpRequest.send();
})

function shortDescriptionGenerator(client) {
    let shortDescription;
    if (client.shortDescription.length > 100) {
        shortDescription = client.shortDescription.slice(0, 100) + '...';
    } else {
        shortDescription = client.shortDescription;
    }
    return shortDescription
}

function logoUrlGenerator(client) {
    let logoUrl;
    if (client.logoUrl !== null) {
        logoUrl = client.logoUrl;
    } else {
        logoUrl = '../images/logo-100X100.png';
    }
    return logoUrl;
}

function urlGenerator(client) {
    let url;
    if (client.url !== null) {
        url = client.url;
    } else {
        url = '';
    }
    return url;
}

function secureSubmissionGeneretor(client) {
    let secureSubmission;
    if (client.active) {
        secureSubmission = `if (confirm('Êtes-vous sûr de vouloir désactiver l\\'intégration de ${client.name} à tous les clubs ?')) { submit();}`;
    } else {
        secureSubmission = `if (confirm('Êtes-vous sûr de vouloir activer l\\'intégration de ${client.name} à tous les clubs ?')) { submit();}`;
    }
    return secureSubmission;
}

function branchHtmlGenerator(branch) {
    let branchHtml = '<div className="row d-flex justify-content-center gx-5 px-sm-5">\n' +
        '        <div className="col-12">\n' +
        '            <div className="bg-light yellow-border rounded mt-2 mt-sm-3 p-3">\n' +
        '                <div className="row mb-2">\n' +
        '                    <div className="col-5 col-lg-2 col-md-3 col-sm-4 mb-2">\n' +
        '                        {% if client.logoUrl %}\n' +
        '                        <img src="{{ client.logoUrl }}" alt="logo"\n' +
        '                             width="100" height="100">\n' +
        '                            {% else %}\n' +
        '                            <img src="{{ asset(\'images/logo-100x100.png\') }}" alt="logo">\n' +
        '                                {% endif %}\n' +
        '                    </div>\n' +
        '                    <div className="col mb-2">\n' +
        '                        <h2 className="mb-1 px-2 h5 font-title"><b>{{client.name}} - {{branch.name}}</b></h2>\n' +
        '                        <p className="mb-1 px-2"><u>Id de la structure</u> : <span className="branchId">{{\n' +
        '                            branch.id\n' +
        '                        }}</span></p>\n' +
        '                        {% if branch.installPerm %}\n' +
        '                        <p className="px-2"><u>Id des permissions</u> : {{branch.installPerm.id}}</p>\n' +
        '                        {% endif %}\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                {% if branch.grantsForm is defined %}\n' +
        '                <div className="row px-2">\n' +
        '                    {% if \'ROLE_ADMIN\' in app.user.roles %}\n' +
        '                    {{form_start(branch.grantsForm)}}\n' +
        '                    {{form_row(branch.grantsForm.active, {\'attr\': {\'onclick\': \'submit()\'}})}}\n' +
        '                    {{form_end(branch.grantsForm, {\'render_rest\': false})}}\n' +
        '                    {% else %}\n' +
        '                    <div className="form-check form-switch">\n' +
        '                        <input type="checkbox" className="form-check-input" id="clientGrants_active"\n' +
        '                               {% if branch.clientGrants.active %} checked{% endif %} disabled>\n' +
        '                            <label className="form-check-label" htmlFor="clientGrants_active">Active</label>\n' +
        '                    </div>\n' +
        '                    {% endif %}\n' +
        '                </div>\n' +
        '                {% endif %}\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>';

    return branchHtml;
}

function installPermHtmlGenerator(branch) {
    let installPermHtml = '<div class="row d-flex justify-content-center gx-5 px-sm-5">\n' +
        '        <div class="col-12">\n' +
        '            <div class="bg-light yellow-border rounded mt-1 mb-2 mb-sm-3 p-3 pb-0">\n' +
        '                <div class="row">\n' +
        '                    <div class=" d-flex justify-content-end">\n' +
        '                        <p data-bs-toggle="collapse" data-bs-target="#{{ branch.name|replace({\' \': \'\'}) }}" aria-expanded="false"\n' +
        '                           aria-controls="{{ branch.name }}" onclick="plusMinusChange()">\n' +
        '                            Permissions\n' +
        '                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"\n' +
        '                                 class="bi bi-plus-circle plus" viewBox="0 0 16 16">\n' +
        '                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>\n' +
        '                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>\n' +
        '                            </svg>\n' +
        '                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"\n' +
        '                                 class="bi bi-dash-circle minus" style="display: none" viewBox="0 0 16 16">\n' +
        '                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>\n' +
        '                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>\n' +
        '                            </svg>\n' +
        '                        </p>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="row collapse" id="{{ branch.name|replace({\' \': \'\'}) }}">\n' +
        '                    <div class="col-12 col-md-6">\n' +
        '                        {% if \'ROLE_ADMIN\' in app.user.roles %}\n' +
        '                            {{ form_start(branch.installForm) }}\n' +
        '                            {{ form_row(branch.installForm.membersRead) }}\n' +
        '                            {{ form_row(branch.installForm.membersWrite) }}\n' +
        '                            {{ form_row(branch.installForm.membersAdd) }}\n' +
        '                            {{ form_row(branch.installForm.membersProductsAdd) }}\n' +
        '                            {{ form_row(branch.installForm.membersPaymentSchedulesRead) }}\n' +
        '                        {% else %}\n' +
        '                            <form class="mb-3">\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersRead"\n' +
        '                                           {% if branch.installPerm.membersRead %}checked{% endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersRead">membersRead</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersWrite"\n' +
        '                                           {% if branch.installPerm.membersWrite %}checked{% endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersWrite">membersWrite</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersAdd"\n' +
        '                                           {% if branch.installPerm.membersAdd %}checked{% endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersAdd">membersAdd</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersProductsAdd"\n' +
        '                                           {% if branch.installPerm.membersProductsAdd %}checked{% endif %}\n' +
        '                                           disabled>\n' +
        '                                    <label class="form-check-label" for="membersProductsAdd">membersProductsAdd</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersPaymentSchedulesRead"\n' +
        '                                           {% if branch.installPerm.membersPaymentSchedulesRead%}checked{%endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersPaymentSchedulesRead">membersPaymentSchedulesRead</label>\n' +
        '                                </div>\n' +
        '                            </form>\n' +
        '                        {% endif %}\n' +
        '                    </div>\n' +
        '                    <div class="col-12 col-md-6 mb-2">\n' +
        '                        {% if \'ROLE_ADMIN\' in app.user.roles %}\n' +
        '                            {{ form_row(branch.installForm.membersStatisticRead) }}\n' +
        '                            {{ form_row(branch.installForm.membersSubscriptionRead) }}\n' +
        '                            {{ form_row(branch.installForm.membersSchedulesRead) }}\n' +
        '                            {{ form_row(branch.installForm.membersSchedulesWrite) }}\n' +
        '                            {{ form_row(branch.installForm.paymentDayRead) }}\n' +
        '                            {{ form_end(branch.installForm) }}\n' +
        '                        {% else %}\n' +
        '                            <form class="mb-3">\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersStatisticRead"\n' +
        '                                           {% if branch.installPerm.membersStatisticRead %}checked{% endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersStatisticRead">membersStatisticRead</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersSubscriptionRead"\n' +
        '                                           {% if branch.installPerm.membersSubscriptionRead %}checked{% endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersSubscriptionRead">membersSubscriptionRead</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersSchedulesRead"\n' +
        '                                           {% if branch.installPerm.membersSchedulesRead %}checked{% endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="membersSchedulesRead">membersSchedulesRead</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="membersSchedulesWrite"\n' +
        '                                           {% if branch.installPerm.membersSchedulesWrite %}checked{% endif %}\n' +
        '                                           disabled>\n' +
        '                                    <label class="form-check-label" for="membersSchedulesWrite">membersSchedulesWrite</label>\n' +
        '                                </div>\n' +
        '                                <div class="form-check form-switch">\n' +
        '                                    <input type="checkbox" class="form-check-input" id="paymentDayRead"\n' +
        '                                           {% if branch.installPerm.paymentDayRead %}checked{%endif %} disabled>\n' +
        '                                    <label class="form-check-label" for="paymentDayRead">paymentDayRead</label>\n' +
        '                                </div>\n' +
        '                            </form>\n' +
        '                        {% endif %}\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>';

    return installPermHtml;
}