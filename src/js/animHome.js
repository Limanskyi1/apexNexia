document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    const laptopScreen = window.matchMedia("(min-width: 992px)");
    if (laptopScreen.matches) {
      const adv = gsap.timeline();
  
      adv
        .from(".adv", {
            scrollTrigger: {
              trigger: ".adv",
              start: "top 92px",
              scrub: 10,
              pin: true,
              pinSpacing: true
            },
        })
        .from(".adv__item", {
            scrollTrigger: {
              trigger: ".adv",
              start: "-250 0",
              scrub: 5,
            },
            stagger: 0.25,
            x:300,
            opacity:0,
        })
        .from(".adv-card", {
            scrollTrigger: {
              trigger: ".adv",
              start: "-250 0",
              scrub: 5,
            },
            stagger: 0.25,
            y:150,
            opacity:0,
        })
      }
  });