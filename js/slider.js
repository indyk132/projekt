(function () {
    const sliders = document.querySelectorAll('.moviesCenter');
    const rightArrow = document.querySelectorAll('.rightArrow');
    const leftArrow = document.querySelectorAll('.leftArrow');
    let currentPosition = 0;
    function right (index){
        const slider = sliders[index];
        if(currentPosition<=0 && currentPosition >= -400){
            // if(currentPosition >= -2400){
                
            // }
            currentPosition -= 300;
            console.log(currentPosition);
            slider.style = `left: ${currentPosition}px;`;
            
        }
        
        
    }

    function left (index) {
        const slider = sliders[index];
        if (currentPosition < 0) {
            currentPosition += 300; 
            console.log(currentPosition);
            slider.style = `left: ${currentPosition}px;`;
            
        
        }
    }

    rightArrow.forEach((rArrow, index) => {
        rArrow.addEventListener('click', () => right(index) );
    }); 
    leftArrow.forEach((lArrow, index) => {
        lArrow.addEventListener('click', () => left(index));
    }); 
})();

