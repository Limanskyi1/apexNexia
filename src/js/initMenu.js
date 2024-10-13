document.addEventListener('DOMContentLoaded', () => {
    const burgerButton = document.querySelector('.btn-burger');
    const headerMenu = document.querySelector('.header__menu');
    const menuCloser = document.querySelector('.menu-closer');

    burgerButton.addEventListener('click', () => {
        headerMenu.style.left = '0';
        setTimeout(() => {
            document.body.style.overflowY = 'hidden';
        }, 800);
    });

    menuCloser.addEventListener('click', () => {
        headerMenu.style.left = '-150vw';
        setTimeout(() => {
            document.body.style.overflowY = 'scroll';
        }, 800);
    });
});


