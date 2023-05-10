<?php

/**
 * Summary of SignupController
 */
class SignupController extends SignUp{
    /**
     * Summary of email
     * @var 
     */
    private $email;
    /**
     * Summary of password
     * @var 
     */
    private $password;
    /**
     * Summary of passwordRepeat
     * @var 
     */
    private $passwordRepeat;

    /**
     * Summary of passCode
     * @var 
     */
    private $passCode;

    /**
     * Summary of __construct
     * @param mixed $email
     * @param mixed $password
     * @param mixed $passwordRepeat
     * @param mixed $passCode
     */
    public function __construct($email, $password, $passwordRepeat){
        //sets the value of the construct from data gotten from user sign up form 
        $this -> email = $email;
        $this -> password = $password;
        $this -> passwordRepeat = $passwordRepeat;
        // set the value of the passcode from Signup  classs
        $this->passCode = $this -> returnPassCode();
    }

    /**
     * Summary of signUpUser
     * @return void
     */
    public function signUpUser(){
        if($this->emptyInput() === false){
            //echo "empty input"
            header("location: ../login.php?error=emptyInput");
            exit();
        }
        if($this->invalidEmail() === false){
            //echo "invalid Email"
            header("location: ../login.php?error=invalidEmail");
            exit();
        }
        if($this->pwdMatch() === false){
            //echo "password Don't match"
            header("location: ../login.php?error=pwdDontMatch");
            exit();
        }
        if($this->userExist() === false){
            //echo "user Exists"
            header("location: ../login.php?error=userAlreadyExists");
            exit();
        }

        //if no error is handled then sign up user
        //set session attribute
        if($this->setUser($this->email, $this->password, $this->passCode) == false){
            //echo "sign up details did not register in database"
            header("location: ../login.php?error=detailsdid not register ");
            exit();
        }else{
            $this->getUser($this->email);
        }
    }

    /**
     * Summary of emptyInput
     * @return bool
     */
    private function emptyInput(){
        $result = false;
        
        //checks if the values in any input field is empty
        if(empty($this -> email) || empty($this -> password) || empty($this -> passwordRepeat)){
            $result = false; 
        }else {
            $result = true;
        }

        return $result;
    
    }

    /**
     * Summary of invalidEmail
     * @return bool
     */
    private funCtion invalidEmail() {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }

    /**
     * Summary of pwdMatch
     * @return bool
     */
    private function pwdMatch(){
        $result = false;
        if($this -> password !== $this -> passwordRepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * Summary of userExist
     * @return bool
     */
    private function userExist(){
        $result = false;
        if(!$this -> checkUser($this -> email)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

}