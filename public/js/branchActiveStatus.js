function activeStatus() {
    let clientGrantsStatus = document.getElementsByName('client_grants[active]')
    let branches = document.getElementsByClassName('branch');

    for (let i = 0; i < clientGrantsStatus.length; i++) {
        if (clientGrantsStatus[i].checked) {
            branches[i].style.display = "";
        } else {
            branches[i].style.display = "none";
        }
    }
}

function inactiveStatus() {
    let clientGrantsStatus = document.getElementsByName('client_grants[active]')
    let branches = document.getElementsByClassName('branch');

    for (let i = 0; i < clientGrantsStatus.length; i++) {
        if (clientGrantsStatus[i].checked) {
            branches[i].style.display = "none";
        } else {
            branches[i].style.display = "";
        }
    }
}

function allStatus() {
    let branches = document.getElementsByClassName('branch');
    for (let i = 0; i < branches.length; i++) {
        branches[i].style.display = "";
    }
}