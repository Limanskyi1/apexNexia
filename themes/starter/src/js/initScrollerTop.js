document.addEventListener('DOMContentLoaded', () => {
    const scroller = document.querySelector('#scroller');

    window.addEventListener('scroll', () => {
        window.pageYOffset >= 300 ? scroller.classList.add('active') : scroller.classList.remove(
            'active');
    });


    scroller.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        });
    });
});








