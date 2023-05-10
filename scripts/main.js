//script for the animated mobile menu slider
//script for the animated mobile menu slider
//script for the animated mobile menu slider

const toggleButton = document.querySelector(".toggle-button");
const navBar = document.querySelector(".nav-bar");
const overlay = document.querySelector(".overlay");

//adding event listener on menu button
window.addEventListener('scroll', reveal)

toggleButton.addEventListener('click', () => {
    toggleButton.classList.toggle('menu-active-btn');
    navBar.classList.toggle('active');
    overlay.classList.toggle('hide');
})

//script for reveal animation on scroll
//script for reveal animation on scroll
//script for reveal animation on scroll
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

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

//script for the rating
//script for the rating
//script for the rating

const designStars = document.querySelectorAll("#design i");
const userExperienceStars = document.querySelectorAll("#UX i");



function rating(...x) {

    //loops through the designStars
    x.forEach((star, index1) => {
        //Adding event listener that runs a function when the "click" event is triggered
        star.addEventListener("click", () => {
            console.log(index1);
            //Loop through the list a second time 
            x.forEach((star, index2) => {
                //Add active class to the clicked star and all precceding stars
                //And remove the active class from the stars with a higher index
                index1 >= index2 ? star.classList.add("active-star") : star.classList.remove("active-star");
            })
        })
        return index1;
    });

}
//... using to pass an array through a function
rating(...designStars);
rating(...userExperienceStars);