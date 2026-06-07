// toggle class active
const navbarNav = document.querySelector
('.navbar-nav');
// ketika menu klik
document.querySelector('#tombolmenu').
onclick = () => {
    navbarNav.classList.toggle('active');
};


//klik diluar sidebar untk hilangkan nav
const tombolmenu = document.querySelector('#tombolmenu');

document.addEventListener('click', function(e) {
    if(!tombolmenu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
})