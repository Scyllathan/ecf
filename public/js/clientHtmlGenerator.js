httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        const data = httpRequest.response;
        let dataReformat = data.replace(/&quot;/ig,'"');
        let clients = JSON.parse(dataReformat);
        let clientList = document.getElementById('clientList');

        for (let i = 0; i < clients.length; i++) {
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
            clientList.innerHTML += clientHtmlGenerator(clients[i], logoUrl, url, shortDescription, checked, secureSubmission);
        }

        const paginationNumbers = document.getElementById("pagination-numbers");
        const paginatedList = document.getElementById("clientList");
        const listItems = [...clientList.getElementsByClassName('client')];

        const paginationLimit = 6;
        const pageCount = Math.ceil(listItems.length / paginationLimit);
        let currentPage;

        getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems);
        setCurrentPage(1, paginationLimit, listItems);
    } else {
        // pas encore prête
    }
};

httpRequest.open('POST', '../../admin/client-list-json', true);
httpRequest.send();

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

function clientHtmlGenerator(client, logoUrl, url, shortDescription, checked, secureSubmission) {
    let clientHtml = `<div class="client col-12 col-lg-6">
	<div class="bg-light yellow-border rounded my-2 my-sm-3 px-1 p-sm-2 h-client-card d-flex flex-column justify-content-between">
		<div class="row pt-2 pt-sm-0">
			<div class="col-4 col-sm-3">
				<img src="${logoUrl}" alt="logo" width="100" height="100">
			</div>
			<div class="col-8 col-sm-9">
				<div>
					<p class="id mb-1 ps-2">${client.id}</p>
					<h2 class="name mb-1 ps-2 h5 font-title">${client.name}</h2>
					<p class="ps-2">
						<a href="http://${url}" target="_blank" class="mb-1">${url}</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<span class="d-md-inline d-none">
				<p class="my-1 px-3">
					${shortDescription}
				</p>
			</span>
		</div>
		<div class="row">
			<div class="col-4 d-flex justify-content-start">
				<form action="../../admin/update-client/${client.id}" method="POST">
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" name="active" ${checked} onclick="${secureSubmission}">
						<label class="form-check-label" for="active">Active</label>
					</div>
				</form>
			</div>
			<div class="col-8 d-flex justify-content-end mb-2 mb-sm-0">
				<a href="../../branch/fiche-client/${client.id}" role="button" class="btn btn-warning me-1 me-sm-0">
					Gérer les clubs
				</a>
			</div>
		</div>
	</div>
</div>`;

    return clientHtml;
}