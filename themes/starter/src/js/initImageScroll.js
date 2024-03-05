document.addEventListener('DOMContentLoaded', () => {
    const image1 = document.getElementsByClassName('thumbnail');
    if(image1){
      new simpleParallax(image1, {
        overflow: true,
        scale: 1.8,
    });
    }
});


document.addEventListener('DOMContentLoaded', () => {
  const image2 = document.getElementsByClassName('thumbnail-2');
  if(image2){
    new simpleParallax(image2, {
      overflow: true,
      scale: 1.8,
  });
  }
});







