function filterId() {
    let idFilter = document.getElementById('idResearch').value.toLowerCase();
    let ids = document.getElementsByClassName('id');
    let client = document.getElementsByClassName('client');
    let text;

    for (let i = 0; i < ids.length; i++) {
        text = ids[i].innerText.toLowerCase();
        if (text.indexOf(idFilter) > -1) {
            client[i].style.display = "";
        } else {
            client[i].style.display = "none";
        }
    }
}