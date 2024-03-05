function formatNumberWithSpaces(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
  }
  
  function animateIncomeValue(element, startValue, endValue, duration) {
    const range = endValue - startValue;
    const increment = endValue > startValue ? 1 : -1;
    const stepTime = 1000 / 60;
    const totalSteps = Math.ceil(duration / stepTime);
    const stepValue = range / totalSteps;
  
    let currentValue = startValue;
    let stepCount = 0;
  
    const timer = setInterval(() => {
      currentValue += stepValue;
      stepCount++;
  
      if (stepCount >= totalSteps) {
        currentValue = endValue;
        clearInterval(timer);
      }
  
      element.textContent = formatNumberWithSpaces(Math.round(currentValue)); // Форматируем значение с пробелами
    }, stepTime);
  }
  
  function startAnimationWhenVisible() {
    const incomeElements = document.querySelectorAll(".income-value");
    const startValue = 0;
    const duration = 2500; // Длительность всегда установлена на 3 секунды
  
    incomeElements.forEach(function (element) {
      const endValue = parseInt(element.dataset.endValue);
      const elementPosition = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      const isElementAnimated = element.dataset.animated === "true";
  
      if (elementPosition < windowHeight && !isElementAnimated) {
        animateIncomeValue(element, startValue, endValue, duration);
        element.dataset.animated = "true";
      }
    });
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    startAnimationWhenVisible();
  
    window.addEventListener("scroll", function () {
      startAnimationWhenVisible();
    });
  });
  