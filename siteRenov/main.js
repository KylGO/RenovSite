console.log("JS connecté !");


const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("navbar-mobile-menu");

menuBtn.addEventListener("click", ()=>{
    mobileMenu.classList.toggle("open");

});