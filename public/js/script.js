// search-box open close js code
let navbar = document.querySelector(".navbar");

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function () {
    navLinks.style.left = "0";
};
menuCloseBtn.onclick = function () {
    navLinks.style.left = "-100%";
};

let hilang = document.querySelector(".guru4");
if (hilang === false) {
    hilang.style.display = none;
}
