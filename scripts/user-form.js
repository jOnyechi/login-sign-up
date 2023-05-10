const notRegisteredLogin = document.getElementById("not-registered-login");
const registeredSignUp = document.getElementById("registered-sign-up");
const loginForm = document.getElementById("login");
const signUpForm = document.getElementById("sign-up");

registeredSignUp.addEventListener('click', () => {
    setTimeout(() => {
        signUpForm.classList.add('hide');
        loginForm.classList.remove('hide');
    }, 500);
});

notRegisteredLogin.addEventListener('click', () => {
    setTimeout(() => {
        loginForm.classList.add('hide');
        signUpForm.classList.remove('hide');
    }, 500);
})

//form validation

const loginBtn = document.getElementById("login-btn");
const signUpBtn = document.getElementById("sign-up-btn");
const emailLogin = document.getElementById("email-login");
const emailSignUp = document.getElementById("email-sign-up");
const passwordLogin = document.getElementById("password-login");
const passwordSignUp = document.getElementById("password-sign-up");
const conPasswordSignUp = document.getElementById("con-password-sign-up");
const errorMsgLogin = document.getElementById("error-message-login");
const errorMsgSignUp = document.getElementById("error-message-sign-up");

signUpForm.addEventListener('submit', (e) => {
    //check if fields are empty
    //check if email is the proper format 
    // set a string format for the password
    //check if the passwords match
    let messages = [];

    if (emailSignUp.value === "" || emailSignUp.value === null) {
        messages.push('Email address is required');
    } else if (!emailSignUp.value.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g)) {
        messages.push('Please enter correct email address');
    } else if (passwordSignUp.value === "" || passwordSignUp.value === null) {
        messages.push('Password is required.');
    } else if (!(passwordSignUp.value.match(/^(?=.*\d)(?=.*[A-Z]).{8,}$/))) {
        messages.push('Please enter the correct format for a password. It MUST be up to 8 characters, it must also contain a number and an uppercase letter');
    } else if (conPasswordSignUp.value === "" || conPasswordSignUp.value === null) {
        messages.push('Please confirm your password')
    } else if (!(passwordSignUp.value === conPasswordSignUp.value)) {
        messages.push('Passwords do not match. Please try again')
    }


    if (messages.length > 0) {
        e.preventDefault();
        errorMsgSignUp.innerText = messages.join(',');
    }

})

loginForm.addEventListener('submit', (e) => {
    //check if fields are empty
    //check if email is the proper format 
    // set a string format for the password

    let messages = [];

    if (emailLogin.value === "" || emailLogin.value === null) {
        messages.push('Email address is required');
    }
    if (!emailLogin.value.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g)) {
        messages.push('Please enter correct email address');
    }
    if (passwordLogin.value === "" || passwordLogin.value === null) {
        messages.push('Password is required.');
    }
    if (!passwordSignUp.value.match(/^(?=.*\d)(?=.*[A-Z]).{8,}$/)) {
        messages.push('Please enter the correct format for a password. It MUST be up to 8 characters, it must also contain a number and an uppercase letter');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorMsgSignUp.innerText = messages.join(',');
        return false
    } else
        return true;

})