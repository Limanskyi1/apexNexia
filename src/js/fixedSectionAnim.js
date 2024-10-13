document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector('.header');
    console.dir(header)
    const updateTapesMarginTop = (section, nextBlock) => {
        const rectIntro = section.getBoundingClientRect();
        nextBlock.style.marginTop = `${rectIntro.height}px`;
    };
  
    const setupIntroTapes = () => {
        const screenWidth = window.innerWidth;
        
        if (screenWidth >= 992) {
            const fixedIntro = document.querySelector('.intro');
            const tapesHome = document.querySelector('.home-page .tapes');
            const fixedAbout = document.querySelector('.about');
            const tapesAbout = document.querySelector('.about-page .tapes')

            if (tapesHome) {
                updateTapesMarginTop(fixedIntro, tapesHome);
                fixedIntro.style.top = `${header.clientHeight}px`;
                window.addEventListener('resize', () => {
                    updateTapesMarginTop(fixedIntro, tapesHome);
                    fixedIntro.style.top = `${header.clientHeight}px`;
                });
            }

            if (tapesAbout) {
                updateTapesMarginTop(fixedAbout, tapesAbout);
                fixedAbout.style.top = `${header.clientHeight}px`;
                window.addEventListener('resize', () => {
                    updateTapesMarginTop(fixedAbout, tapesAbout);
                    fixedAbout.style.top = `${header.clientHeight}px`;
                });
            }
        }
    };
  
    setupIntroTapes();
});



