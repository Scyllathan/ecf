function getPaginationNumbers(pageCount, paginationNumbers, paginationLimit, listItems) {
    paginationNumbers.innerHTML = '';

    for (let i = 1; i <= pageCount; i++) {
        const pageNumber = document.createElement("button");
        pageNumber.className = "pagination-number btn btn-warning me-1";
        pageNumber.innerHTML = i;
        pageNumber.setAttribute("page-index", i);
        pageNumber.setAttribute("aria-label", "Page " + i);
        pageNumber.addEventListener("click", () => {
            setCurrentPage(i, paginationLimit, listItems);
        });

        paginationNumbers.appendChild(pageNumber);
    }
}

function setCurrentPage(pageNum, paginationLimit, listItems) {
    currentPage = pageNum;
    handleActivePageNumber();

    const prevRange = (pageNum - 1) * paginationLimit;
    const currRange = pageNum * paginationLimit;

    listItems.forEach((item, index) => {
        item.style.display = "none";
        if (index >= prevRange && index < currRange) {
            item.style.display = "";
        }
    });
}

const handleActivePageNumber = () => {
    document.querySelectorAll(".pagination-number").forEach((button) => {
        button.classList.remove("btn-warning");
        button.classList.add("btn-outline-warning");

        const pageIndex = Number(button.getAttribute("page-index"));
        if (pageIndex === currentPage) {
            button.classList.remove("btn-outline-warning");
            button.classList.add("btn-warning");
        }
    });
};