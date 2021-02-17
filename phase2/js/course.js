var readMore = document.querySelector("#read-more"),
    content = document.querySelector("#content"),
    innerContent = document.querySelector("#inner-content");

readMore.addEventListener("click", () => {
    content.classList.add("show-content");
    innerContent.classList.add("show-content");
    readMore.style.display = "none";
})