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
        let checked;

        if (clients[i].active) {
            checked = 'checked';
        } else {
            checked = '';
        }

        if (text.indexOf(idFilter) > -1) {
            clientList.innerHTML += '<div class="col-12 col-lg-6 client">\n' +
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
