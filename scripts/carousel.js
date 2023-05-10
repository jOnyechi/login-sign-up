//script for the carousel mechnaism
//script for the carousel mechnaism
//script for the carousel mechnaism

var buttonNext = document.getElementById('button-next');
var buttonPrevious = document.getElementById('button-prev');
var projectsContainer = document.getElementById('projects-container');

function nextSlide() {
    buttonNext.addEventListener('click', () => {
        console.log(projectsContainer.offsetWidth);
        projectsContainer.style.transform("translateX = 40vw");
    })
}



var projectSlide = document.getElementById('project-slide');
console.log(projectSlide);

function loopNodes() {
    for (let i = 0; i < projectSlide.childNodes.length; i++) {
        console.log(projectSlide.childNodes[i]);
    }
}

loopNodes();
nextSlide();