const openMobileMenuButton = document.getElementById("mobile-menu-open");
const closeMobileMenuButton = document.getElementById("mobile-menu-close");
const mobileMenu = document.getElementById("mobile-menu");

openMobileMenuButton.addEventListener("click",()=>{
    mobileMenu.classList.toggle('hidden');
})

closeMobileMenuButton.addEventListener("click",()=>{
    mobileMenu.classList.toggle('hidden');
})