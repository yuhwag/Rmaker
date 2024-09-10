const siteMenuOpen = document.querySelector('.site-menu-toggle');
siteMenuOpen.addEventListener('click', () => {
    document.querySelector('.header').classList.toggle('offcanvas-menu');
    document.querySelector('.site-mobile-menu').classList.toggle('transX-0')
})
const siteMenuClose = document.querySelector('.site-mobile-menu-close');
siteMenuClose.addEventListener('click', () => {
    document.querySelector('.header').classList.toggle('offcanvas-menu');
    document.querySelector('.site-mobile-menu').classList.toggle('transX-0')
})