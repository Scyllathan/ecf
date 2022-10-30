function branchIdFilter() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let branches = JSON.parse(dataReformat);

    let branchFilter = document.getElementById('branchResearch').value.toString()
    let branchList = document.getElementById('branchList');
    branchList.innerHTML = '';
    let text = '';

    for (let i = 0; i < branches.length; i++) {
        text = branches[i].id.toString();

        const roleUser = document.getElementById('rolesUser').innerText;
        let roleAdmin = roleUser.indexOf('ROLE_ADMIN');
        let logoUrl = logoUrlGenerator(branches[i]);
        let installPerm = installPermGenerator(branches[i]);
        let checked = checkedGenerator(branches[i]);
        let installPermForm1 = installPerm1FormGenerator(branches[i], roleAdmin);
        let installPermForm2 = installPermForm2Generator(branches[i], roleAdmin)
        let secureSubmission = secureSubmissionGenerator(branches[i]);
        let clientGrantsForm = clientGrantsFormGenerator(branches[i], checked, secureSubmission, roleAdmin);

        if (text.indexOf(branchFilter) > -1) {
            let branchElement= branchHtmlGenerator(branches[i], logoUrl, installPerm, checked, secureSubmission, clientGrantsForm);
            let installPermElement = '';
            if (branches[i].installPerm !== null) {
                installPermElement = installPermHtmlGenerator(branches[i], installPermForm1, installPermForm2);
            }
            branchList.innerHTML += `<div class="branch">
                                                        ${branchElement}
                                                        ${installPermElement}
                                                    </div>`;
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