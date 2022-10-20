function plusMinusChange() {
    let plus = document.getElementsByClassName('plus')
    let minus = document.getElementsByClassName('minus')

    for (let i = 0; i < plus.length; i++) {
        if (plus[i].style.display === "none") {
            plus[i].style.display = ""
            minus[i].style.display = "none"
        } else {
            plus[i].style.display = "none"
            minus[i].style.display = ""
        }
    }
}