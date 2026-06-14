// toggle class active untuk tombol menu
const navbarNav = document.querySelector
('.navbar-nav');
// ketika tombolmenu diklik
document.querySelector('#tombolmenu').
onclick = () => {
    navbarNav.classList.toggle('active');
};


// toggle class active untuk search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick = (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
 };


//klik diluar elemen
const tombolmenu = document.querySelector('#tombolmenu');
const sb = document.querySelector('#search-button');

document.addEventListener('click', function(e) {
    if(!tombolmenu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
    if(!sb.contains(e.target) && !searchForm.contains(e.target)) {
        searchForm.classList.remove('active');
    }
});
