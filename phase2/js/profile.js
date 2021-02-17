let inputs = document.querySelectorAll(".field"),
    stars = document.querySelectorAll(".first"),
    select = document.querySelectorAll('select');

for (i = 0; i < inputs.length; i++) {
    if (inputs[i].value !== "") {
        stars[i].style.display = "none";
    }
}