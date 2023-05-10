//script for reveal animation on scroll
//script for reveal animation on scroll
//script for reveal animation on scroll

function show() {
    var reveals = document.querySelectorAll(".timeline-container ul li");

    for (i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 100;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active-reveal');
        } else
            reveals[i].classList.remove('active-reveal');
    }
}