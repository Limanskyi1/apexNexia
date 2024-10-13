document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('.header')) {
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
      window.pageYOffset >= 100
        ? header.classList.add('active')
        : header.classList.remove('active');
    });
  }
});



gsap.registerPlugin(ScrollTrigger);

// Создаем массив элементов
const counters = document.querySelectorAll(".counter");

counters.forEach((counterElement) => {
  let counterValue = 0;
  let numberTo = counterElement.dataset.number;
  counterElement.innerText = counterValue;

  gsap.to({}, {
    scrollTrigger: {
      trigger: counterElement,
      start: "-250 center",
      end: "+=350",
      scrub: 0.5,
      markers: true,
      onUpdate: (self) => {
        counterValue = Math.round(self.progress * Number(numberTo));
        const roundedValue = Math.round(counterValue);
        counterElement.innerText = roundedValue;
      },
    },
  });
});
