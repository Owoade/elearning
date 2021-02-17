let user = document.querySelector("#user"),
    pass = document.querySelector("#pass"),
    username = document.querySelector("#username"),
    password = document.querySelector("#password"),
    passwordIcon = document.getElementById("password-icon"),
    icon1 = document.getElementById("icon1"),
    userIcon = document.getElementById("user-icon"),
    show = document.querySelector("#show"),
    hide = document.querySelector("#hide");

password.addEventListener("click", () => {
    pass.children[0].style.animation = "anim forwards .8s";
    pass.children[1].style.animation = "anim forwards .8s";
    show.style.top = '80px';
    hide.style.top = '80px';

});
username.addEventListener("click", () => {
    user.children[0].style.animation = "anim forwards .8s";
    user.children[1].style.animation = "anim forwards .8s";
    show.style.top = '83px';
    hide.style.top = '83px';
})



show.addEventListener("click", () => {
    if (password.type === "password") {
        password.type = "text";
        hide.style.display = "block";
        show.style.display = "none";
    }
})
hide.addEventListener("click", () => {
    if (password.type === "text") {
        password.type = "password";
        hide.style.display = "none";
        show.style.display = "block";
    }
});