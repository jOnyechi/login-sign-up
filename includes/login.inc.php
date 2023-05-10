<?php
if(isset($_POST["submit-login"])){
    
    //grab the data 
    $uemail = $_POST["email-login"];
    $upwd = $_POST["password-login"];

    //instantiate controller class
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';
    

    $login = new LoginController($uemail, $upwd);

    //Running error handlers and user sign up
    $login->loginUser();

    //going back to front page 
    header("location: ../index.php?error=none");

}