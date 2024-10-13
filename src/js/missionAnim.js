document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);
    const laptopScreen = window.matchMedia("(min-width: 992px)");
    if (laptopScreen.matches) {
        const mission = gsap.timeline();
        mission
            .from(".mission", {
                scrollTrigger: {
                    trigger: ".mission",
                    start: "top 80px",
                    scrub: 120,
                    pin: true,
                    pinSpacing: true,
                },
            })
            .to(".gsap-anim", {
                scrollTrigger: {
                    trigger: ".mission",
                    start: "-250 0",
                    scrub: 5,
                },
                width: '100%',
            });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener('scroll', () => {
        const items = document.querySelectorAll('.mission__item');
        const missionRect = document.querySelector('.mission .border').getBoundingClientRect();
        const missionWidth = missionRect.width;
    
    
        items.forEach((item) => {
            const itemRect = item.getBoundingClientRect();
            const isPassed = (itemRect.left + itemRect.width / 2) >= missionRect.left && (itemRect.left + itemRect.width / 2) <= missionRect.right;
            if (missionWidth > Number(itemRect.width) / 2 + Number(itemRect.left)) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
})



