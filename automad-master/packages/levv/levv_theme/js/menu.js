const toggleMenuButton = document.getElementById("levv-toggle-menu");
const navBar = document.getElementById("levv-nav-bar");
console.log(navBar)
const menuItemsArray = document.getElementsByClassName("levv-menu-opened");

toggleMenuButton.addEventListener("click",()=>{
    toggleMenuButton.classList.toggle('opened')
    navBar.classList.toggle('levv-nav-bar-closed')
    navBar.classList.toggle('levv-nav-bar-opened')
    for (let menuItem of menuItemsArray) {
        menuItem.classList.toggle('hidden');
        menuItem.classList.toggle('flex');
    }
})