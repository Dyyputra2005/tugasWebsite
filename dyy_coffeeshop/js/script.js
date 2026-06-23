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
const sc = document.querySelector('#shopping-card-button');

document.querySelector('#search-button').onclick = (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
 };

//  toggle class active shopping card
const shoppingcard = document.querySelector('.shopping-card');
document.querySelector('#shopping-card-button').onclick= (e) => {
    shoppingcard.classList.toggle('active');
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
    if(!sc.contains(e.target) && !shoppingcard.contains(e.target)) {
        shoppingcard.classList.remove('active');
    }
});


// Modal Box
const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailButtons = document.querySelectorAll('.item-detail-button');

itemDetailButtons.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModal.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close modal
document.querySelector('.modal .close-icon').onclick = (e) => {
  itemDetailModal.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
window.onclick = (e) => {
  if (e.target === itemDetailModal) {
    itemDetailModal.style.display = 'none';
  }
};
