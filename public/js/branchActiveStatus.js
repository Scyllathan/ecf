function activeStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let branches = JSON.parse(dataReformat);
    let branchList = document.getElementById('branchList');
    branchList.innerHTML = '';

    if (branches) {
        for (let i = 0; i < branches.length; i++) {
            const roleUser = document.getElementById('rolesUser').innerText;
            let roleAdmin = roleUser.indexOf('ROLE_ADMIN');
            let logoUrl = logoUrlGenerator(branches[i]);
            let installPerm = installPermGenerator(branches[i]);
            let checked = checkedGenerator(branches[i]);
            let installPermForm1 = installPerm1FormGenerator(branches[i], roleAdmin);
            let installPermForm2 = installPermForm2Generator(branches[i], roleAdmin)
            let secureSubmission = secureSubmissionGenerator(branches[i]);
            let clientGrantsForm = clientGrantsFormGenerator(branches[i], checked, secureSubmission, roleAdmin);

            if (branches[i].clientGrants.active) {
                branchList.innerHTML = branchHtmlGenerator(branches[i], logoUrl, installPerm, checked, secureSubmission, clientGrantsForm);
                if (branches[i].installPerm) {
                    branchList.innerHTML += installPermHtmlGenerator(branches[i], installPermForm1, installPermForm2);
                }
            }
        }
    }

    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("branchList");
    const listItems = [...branchList.getElementsByClassName('branch')];

    const paginationLimit = 2;
    const pageCount = Math.ceil(listItems.length / paginationLimit);

    getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
    setCurrentPage(1, paginationLimit, listItems);
}

function inactiveStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let branches = JSON.parse(dataReformat);
    let branchList = document.getElementById('branchList');
    branchList.innerHTML = '';

    if (branches) {
        for (let i = 0; i < branches.length; i++) {
            const roleUser = document.getElementById('rolesUser').innerText;
            let roleAdmin = roleUser.indexOf('ROLE_ADMIN');
            let logoUrl = logoUrlGenerator(branches[i]);
            let installPerm = installPermGenerator(branches[i]);
            let checked = checkedGenerator(branches[i]);
            let installPermForm1 = installPerm1FormGenerator(branches[i], roleAdmin);
            let installPermForm2 = installPermForm2Generator(branches[i], roleAdmin)
            let secureSubmission = secureSubmissionGenerator(branches[i]);
            let clientGrantsForm = clientGrantsFormGenerator(branches[i], checked, secureSubmission, roleAdmin);

            if (!branches[i].clientGrants.active) {
                branchList.innerHTML = branchHtmlGenerator(branches[i], logoUrl, installPerm, checked, secureSubmission, clientGrantsForm);
                if (branches[i].installPerm) {
                    branchList.innerHTML += installPermHtmlGenerator(branches[i], installPermForm1, installPermForm2);
                }
            }
        }
    }

    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("branchList");
    const listItems = [...branchList.getElementsByClassName('branch')];

    const paginationLimit = 2;
    const pageCount = Math.ceil(listItems.length / paginationLimit);

    getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
    setCurrentPage(1, paginationLimit, listItems);
}

function allStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let branches = JSON.parse(dataReformat);
    let branchList = document.getElementById('branchList');
    branchList.innerHTML = '';

    for (let i = 0; i < branches.length; i++) {
        const roleUser = document.getElementById('rolesUser').innerText;
        let roleAdmin = roleUser.indexOf('ROLE_ADMIN');
        let logoUrl = logoUrlGenerator(branches[i]);
        let installPerm = installPermGenerator(branches[i]);
        let checked = checkedGenerator(branches[i]);
        let installPermForm1 = installPerm1FormGenerator(branches[i], roleAdmin);
        let installPermForm2 = installPermForm2Generator(branches[i], roleAdmin)
        let secureSubmission = secureSubmissionGenerator(branches[i]);
        let clientGrantsForm = clientGrantsFormGenerator(branches[i], checked, secureSubmission, roleAdmin);

        branchList.innerHTML += branchHtmlGenerator(branches[i], logoUrl, installPerm, checked, secureSubmission, clientGrantsForm);
        if (branches[i].installPerm) {
            branchList.innerHTML += installPermHtmlGenerator(branches[i], installPermForm1, installPermForm2);
        }
    }

    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("branchList");
    const listItems = [...branchList.getElementsByClassName('branch')];

    const paginationLimit = 2;
    const pageCount = Math.ceil(listItems.length / paginationLimit);

    getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
    setCurrentPage(1, paginationLimit, listItems);
}