const btnMenu = document.querySelector('.btn-rond-menu');
const nav = document.querySelector('.navbar');
const allItemNav = document.querySelectorAll('.nav-menu-item');
const ligne = document.querySelector('.cont-ligne');

btnMenu.addEventListener('click', () => {
    
    ligne.classList.toggle('active');
    nav.classList.toggle('visible')
});