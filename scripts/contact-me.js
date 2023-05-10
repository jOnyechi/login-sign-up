/*
function symbolAppear() {
    //loop through the nodelist 
    const contactSymbols = document.querySelectorAll(".symbol");
    setTimeout(() => {
        for (let i = 0; i <= contactSymbols.length; i++) {
            contactSymbols[i].classList.toggle('active-reveal');
        }
    }, 500)
}

symbolAppear();
*/

function addClassToElements(arr, className) {
    let i = 0;
    const interval = setInterval(function() {
        if (i >= arr.length) {
            clearInterval(interval);
            return;
        }
        arr[i].classList.add(className);
        i++;
    }, 1000);
}

const elements = document.querySelectorAll('.symbol');
addClassToElements(elements, 'active-reveal');