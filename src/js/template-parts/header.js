const searchIcon = document.querySelector('.search-icon');
const searchBar = document.querySelector('.search-bar');
const navbarBurger = document.querySelector('.navbar-burger');
const navbarItems = document.querySelector('.navbar-items');
const ofertaContainer = document.querySelector('.offer-container');

searchIcon.addEventListener('click', () => {
  searchBar.classList.toggle('active');
});

ofertaContainer.addEventListener('click', () => {
  ofertaContainer.classList.toggle('active');
});

navbarBurger.addEventListener('click', () => {
  navbarItems.classList.toggle('active');
  document.body.classList.toggle('navbar-items-active');
});

const navLinks = document.querySelectorAll('.navbar a');
navLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        navbarItems.classList.remove('active');
        document.body.classList.remove('navbar-items-active');
    });
});
