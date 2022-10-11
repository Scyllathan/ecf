function filterName() {
    let nameFilter = document.getElementById('nameResearch').value.toLowerCase();
    let names = document.getElementsByClassName('name');
    let client = document.getElementsByClassName('client');
    let text;

    for (let i = 0; i < names.length; i++) {
        text = names[i].innerText.toLowerCase();
        if (text.indexOf(nameFilter) > -1) {
            client[i].style.display = "";
        } else {
            client[i].style.display = "none";
        }
    }
}