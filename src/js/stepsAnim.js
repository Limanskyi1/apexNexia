
function activeHover(container,itemSelector,items) {
  container.addEventListener('mouseover', (e) => {
    const stepsItem = e.target.closest(itemSelector);
    if (stepsItem) {
      if(stepsItem.classList.contains('active')) return;
      items.forEach(step => step.classList.remove('active'))
      stepsItem.classList.add('active');
    } else {
        console.log(false);
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const stepsWrap = document.querySelector('.steps .wrapper');
  const stepsItems = document.querySelectorAll('.steps .wrapper .steps__item');
  const stepsItemSelector = '.steps__item';

  const accountWrap = document.querySelector('.types .wrapper');
  const accountItems = document.querySelectorAll('.types .wrapper .types__item');
  const accountItemSelector = '.types__item';

  if(stepsWrap){
    activeHover(stepsWrap, stepsItemSelector, stepsItems);
  }
  if(accountWrap){
    activeHover(accountWrap, accountItemSelector, accountItems);
  }
});





document.addEventListener("DOMContentLoaded",  () =>  {
  const targetElement = document.querySelector('.steps__item');
  if (targetElement) {
      const stepsItems = document.querySelectorAll('.steps .wrapper .steps__item');
      let timeoutId;

      function onVisibilityChange() {
          const elementRect = targetElement.getBoundingClientRect();
          const isVisible = elementRect.top <= window.innerHeight && elementRect.bottom >= 0;

          if (isVisible) {
              if (targetElement.classList.contains('_active') && !targetElement.classList.contains('active')) {
                  timeoutId = setTimeout(() => {
                      stepsItems.forEach(item => item.classList.remove('active'))
                      targetElement.classList.add('active');
                      document.removeEventListener('scroll', onVisibilityChange);
                  }, 800);
              } else {
                  clearTimeout(timeoutId);
              }
          }
      }
      document.addEventListener('scroll', onVisibilityChange);
      onVisibilityChange();
  }
});



 