//script for reveal animation on scroll
//script for reveal animation on scroll
//script for reveal animation on scroll
function show() {
    console.log('hello');
    var reveals = document.querySelectorAll(".timeline-container ul li");
    console.log(reveals);

    for (i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 20;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active-reveal');
        } else
            reveals[i].classList.remove('active-reveal');
    }
}