// Time and Greeting System

let daTe = document.getElementById("date"),
    greeting = document.getElementById("greeting");
var today = new Date(),
    hour = today.getHours();
date = today.toDateString();
daTe.innerHTML = date;
if (greeting) {
    if (hour < 12) {
        greeting.innerHTML = "Good Morning,";
    } else if (hour < 16) {
        greeting.innerHTML = "Good Afternoon,";
    } else {
        greeting.innerHTML = "Good Evening,";
    }
}


//Submenu system

var subMenu = document.querySelectorAll(".sub-menu"),
    navLinks = document.querySelectorAll("nav ul a"),
    subLink = document.querySelectorAll(".sub-link");
resetMenu();

navLinks[1].addEventListener('mouseover', () => {
    inActive();
    resetMenu();
    navLinks[1].classList.add("link-active");

    subMenu[0].style.display = "block";
    subLink[1].addEventListener('mouseover', () => {
        subMenu[1].style.display = "block";

    })
    subLink[0].addEventListener('click', () => {
        subMenu[1].style.display = "none";
    })
})



window.addEventListener("scroll", resetMenu);
window.addEventListener("scroll", inActive);
let widthLimit = 776,
    screenWidth = window.innerWidth;
if (screenWidth <= widthLimit) {
    subMenu.forEach(menu => {
        menu.classList.add("remove");
    })
    navLinks.forEach(link => {
        link.classList.add("link-inactive");
    });


}

function resetLink() {
    subLink.forEach(link => {
        link.style.display = "none";
    })

}

function resetMenu() {
    subMenu.forEach(menu => {
        menu.style.display = "none";
    })


}

function inActive() {
    navLinks.forEach(Link => {
        Link.classList.remove("link-active")
    })
}

// Mobile Menu
let mainMenu = document.querySelector('.main-menu'),
    mobileMenuOverlay = document.querySelector('.mobile-menu-overlay'),
    mobileMenu = document.querySelector('.mobile-menu'),
    hide = document.querySelector('.mobile-menu span'),
    profile = document.querySelector('.mobile-menu .profile'),
    profileArrow = document.querySelector('.profile .arrow'),
    courseArrow = document.querySelector('.courses .arrow'),
    courses = document.querySelector('.mobile-menu .courses'),
    mobileSubMenu = document.querySelector('.mobile-menu .sub-mobile-menu'),
    mobileSubMenu2 = document.querySelector('.mobile-menu .sub-mobile-menu2');
profile.addEventListener('click', () => {
    profileArrow.classList.toggle('arrow-animation');
    mobileSubMenu.classList.toggle('mobile-sublink-show');
});
courses.addEventListener('click', () => {
    courseArrow.classList.toggle('arrow-animation');
    mobileSubMenu.classList.toggle('mobile-sublink2-show');
})
mainMenu.addEventListener('click', () => {
    mobileMenuOverlay.classList.add('mobile-menu-overlay-show');
    mobileMenu.classList.add('mobile-menu-show');
})
hide.addEventListener('click', () => {
    mobileMenuOverlay.classList.remove('mobile-menu-overlay-show');
    mobileMenu.classList.remove('mobile-menu-show');
});
mobileMenu.addEventListener('blur', () => {
    alert('true');
});