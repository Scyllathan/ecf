function activeStatus() {
    let clientsStatus = document.getElementsByName('client[active]')
    let clients = document.getElementsByClassName('client');

    for (let i = 0; i < clientsStatus.length; i++) {
        if (clientsStatus[i].checked) {
            clients[i].style.display = "";
        } else {
            clients[i].style.display = "none";
        }
    }
}

function inactiveStatus() {
    let clientsStatus = document.getElementsByName('client[active]')
    let clients = document.getElementsByClassName('client');

    for (let i = 0; i < clientsStatus.length; i++) {
        if (clientsStatus[i].checked) {
            clients[i].style.display = "none";
        } else {
            clients[i].style.display = "";
        }
    }
}

function allStatus() {
    let clients = document.getElementsByClassName('client');
    for (let i = 0; i < clients.length; i++) {
        clients[i].style.display = "";
    }
}