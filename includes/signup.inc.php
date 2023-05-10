<?php
if(isset($_POST["submit-signup"])){
    
    //grab the data 
    $uemail = $_POST["email-sign-up"];
    $upwd = $_POST["password-sign-up"];
    $upwdRepeat = $_POST["con-password-sign-up"];

    //instantiate controller class
    include '../classes/dbh.classes.php';
    include '../classes/signup.classes.php';
    include '../classes/signup-contr.classes.php';
    

    $signup = new SignupController($uemail, $upwd, $upwdRepeat);

    //Running error handlers and user sign up
    $signup->signupUser();

    //going back to front page 
    header("location: ../index.php?error=none");

}