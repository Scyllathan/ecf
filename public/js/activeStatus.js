function activeStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let clientList = document.getElementById('clientList');
    clientList.innerHTML = '';

    for (let i = 0; i < clients.length; i++) {
        let logoUrl = logoUrlGenerator(clients[i]);
        let url = urlGenerator(clients[i]);
        let shortDescription = shortDescriptionGenerator(clients[i]);
        let secureSubmission = secureSubmissionGeneretor(clients[i]);
        let checked = '';

        if (clients[i].active) {
            checked = 'checked';
            clientList.innerHTML += clientHtmlGenerator(clients[i], logoUrl, url, shortDescription, checked, secureSubmission);
        }
    }

    const paginationNumbers = document.getElementById("pagination-numbers");
    const listItems = [...clientList.getElementsByClassName('client')];
    const paginationLimit = 6;
    const pageCount = Math.ceil(listItems.length / paginationLimit);

    getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
    setCurrentPage(1, paginationLimit, listItems);
}

function inactiveStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let clientList = document.getElementById('clientList');
    clientList.innerHTML = '';

    for (let i = 0; i < clients.length; i++) {
        let logoUrl = logoUrlGenerator(clients[i]);
        let url = urlGenerator(clients[i]);
        let shortDescription = shortDescriptionGenerator(clients[i]);
        let secureSubmission = secureSubmissionGeneretor(clients[i]);
        let checked = '';

        if (!clients[i].active) {
            clientList.innerHTML += clientHtmlGenerator(clients[i], logoUrl, url, shortDescription, checked, secureSubmission);
        }
    }

    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("clientList");
    const listItems = [...clientList.getElementsByClassName('client')];

    const paginationLimit = 6;
    const pageCount = Math.ceil(listItems.length / paginationLimit);

    getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
    setCurrentPage(1, paginationLimit, listItems);
}

function allStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let clientList = document.getElementById('clientList');
    clientList.innerHTML = '';

    for (let i = 0; i < clients.length; i++) {
        let logoUrl = logoUrlGenerator(clients[i]);
        let url = urlGenerator(clients[i]);
        let shortDescription = shortDescriptionGenerator(clients[i]);
        let secureSubmission = secureSubmissionGeneretor(clients[i]);
        let checked = '';

        if (clients[i].active) {
            checked = 'checked';
        }
        clientList.innerHTML += clientHtmlGenerator(clients[i], logoUrl, url, shortDescription, checked, secureSubmission);
    }

    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("clientList");
    const listItems = [...clientList.getElementsByClassName('client')];

    const paginationLimit = 6;
    const pageCount = Math.ceil(listItems.length / paginationLimit);

    getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
    setCurrentPage(1, paginationLimit, listItems);
}