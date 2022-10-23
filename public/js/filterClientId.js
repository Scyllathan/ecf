function filterClientId() {
    let clientList = document.getElementById('clientList');
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let idFilter = document.getElementById('idResearch').value.toLowerCase();
    clientList.innerHTML = '';
    let text = '';

    for (let i = 0; i < clients.length; i++) {
        text = clients[i].id.toLowerCase();

        let logoUrl = logoUrlGenerator(clients[i]);
        let url = urlGenerator(clients[i]);
        let shortDescription = shortDescriptionGenerator(clients[i]);
        let secureSubmission = secureSubmissionGeneretor(clients[i]);
        let checked;

        if (clients[i].active) {
            checked = 'checked';
        } else {
            checked = '';
        }

        if (text.indexOf(idFilter) > -1) {
            clientList.innerHTML += clientHtmlGenerator(clients[i], logoUrl, url, shortDescription, checked, secureSubmission);
        }

        const paginationNumbers = document.getElementById("pagination-numbers");
        const paginatedList = document.getElementById("clientList");
        const listItems = [...clientList.getElementsByClassName('client')];
        const nextButton = document.getElementById("next-button");
        const prevButton = document.getElementById("prev-button");

        const paginationLimit = 6;
        const pageCount = Math.ceil(listItems.length / paginationLimit);
        let currentPage;

        getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
        setCurrentPage(1, paginationLimit, listItems);
    }
}
