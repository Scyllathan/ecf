const clientHtml = '<div class="col-12 col-lg-6 client">\n' +
    '    <div class="bg-light yellow-border rounded my-2 my-sm-3 px-1 py-2 p-sm-2 h-25 d-flex\n' +
    '                                flex-column\n' +
    '                                justify-content-between">\n' +
    '        <div class="row">\n' +
    '            <div class="col-4 col-sm-3">\n' +
    '                    <img src="'+ logoUrl +'" alt="logo"\n' +
    '                         width="100" height="100">\n' +
    '            </div>\n' +
    '            <div class="col-8 col-sm-9 ">\n' +
    '                <div>\n' +
    '                    <p class="id mb-1 ps-2">'+ clients[i].id +'</p>\n' +
    '                    <p class="name mb-1 ps-2">'+ clients[i].name +'</p>\n' +
    '                    <p class="ps-2"><a href="http://' + url + '"\n' +
    '                                       target="_blank" class="mb-1">' + url + '</a></p>\n' +
    '                </div>\n' +
    '            </div>\n' +
    '        </div>\n' +
    '        <div class="row">\n' +
    '            <span class="d-md-inline d-none">\n' +
    '                <p class="my-1 px-3">' + shortDescription + '\n' +
    '                </p>\n' +
    '            </span>\n' +
    '        </div>\n' +
    '        <div class="row">\n' +
    '            <div class="col-4 d-flex justify-content-start">\n' +
    '                   <form action="../../admin/update-client/'+ clients[i].id +'" method="POST"' +
    ' onclick="submit()">' +
    '<div class="form-check form-switch">\n' +
    '  <input class="form-check-input" type="checkbox" name="active" ' + checked +'>\n' +
    '  <label class="form-check-label" for="active">Active</label>\n' +
    '</div>' +
    '                   </form>' +
    '            </div>\n' +
    '            <div class="col-8 d-flex justify-content-end">\n' +
    '                <a href="../../branch/fiche-client/' + clients[i].id + '" role="button"\n' +
    '                   class="btn btn-warning me-1 me-sm-0">\n' +
    '                    Gérer les clubs\n' +
    '                </a>\n' +
    '            </div>\n' +
    '        </div>\n' +
    '    </div>\n' +
    '</div>';

httpRequest = new XMLHttpRequest();

function shortDescriptionGenerator() {
    let shortDescription;
    if (clients[i].shortDescription.length > 100) {
        shortDescription = clients[i].shortDescription.slice(0, 100) + '...';
    } else {
        shortDescription = clients[i].shortDescription;
    }
    return shortDescription
}

function logoUrlGenerator() {
    let logoUrl;
    if (clients[i].logoUrl !== null) {
        logoUrl = clients[i].logoUrl;
    } else {
        logoUrl = '../images/logo-100X100.png';
    }
    return logoUrl;
}

function urlGenerator() {
    let url;
    if (clients[i].url !== null) {
        url = clients[i].url;
    } else {
        url = '';
    }
    return url;
}

httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        const data = httpRequest.response;
        let dataReformat = data.replace(/&quot;/ig,'"');
        let clients = JSON.parse(dataReformat);
        let clientList = document.getElementById('clientList');

        for (let i = 0; i < clients.length; i++) {
            let logoUrl = logoUrlGenerator();
            let url = urlGenerator();
            let shortDescription = shortDescriptionGenerator();
            let checked;

            if (clients[i].active) {
                checked = 'checked';
            } else {
                checked = '';
            }
            clientList.innerHTML += clientHtml;
        }
    } else {
        // pas encore prête
    }
};

httpRequest.open('POST', 'http://ecf.localhost/admin/client-list-json', true);
httpRequest.send();

function activeStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let clientList = document.getElementById('clientList');
    clientList.innerHTML = '';

    for (let i = 0; i < clients.length; i++) {
        let logoUrl = logoUrlGenerator();
        let url = urlGenerator();
        let shortDescription = shortDescriptionGenerator();
        let checked = '';

        if (clients[i].active) {
            checked = 'checked';
            clientList.innerHTML += clientHtml;
        }
    }
}

function inactiveStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let clientList = document.getElementById('clientList');
    clientList.innerHTML = '';

    for (let i = 0; i < clients.length; i++) {
        let logoUrl = logoUrlGenerator();
        let url = urlGenerator();
        let shortDescription = shortDescriptionGenerator();
        let checked = '';

        if (!clients[i].active) {
            clientList.innerHTML += clientHtml;
        }
    }
}

function allStatus() {
    const data = httpRequest.response;
    let dataReformat = data.replace(/&quot;/ig,'"');
    let clients = JSON.parse(dataReformat);
    let clientList = document.getElementById('clientList');
    clientList.innerHTML = '';

    for (let i = 0; i < clients.length; i++) {
        let logoUrl = logoUrlGenerator();
        let url = urlGenerator();
        let shortDescription = shortDescriptionGenerator();
        let checked = '';

        if (clients[i].active) {
            checked = 'checked';
        }
        clientList.innerHTML += clientHtml;
    }
}
