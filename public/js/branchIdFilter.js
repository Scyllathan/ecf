function branchIdFilter() {
    let branchFilter = document.getElementById('branchResearch').value.toLowerCase();
    let ids = document.getElementsByClassName('branchId');
    let branches = document.getElementsByClassName('branch');
    let text;

    for (let i = 0; i < ids.length; i++) {
        text = ids[i].innerText.toLowerCase();
        if (text.indexOf(branchFilter) > -1) {
            branches[i].style.display = "";
        } else {
            branches[i].style.display = "none";
        }
    }
}