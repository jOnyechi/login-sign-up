<?php

/**
 * Summary of LoginController
 */
class LoginController extends Login{
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
     * Summary of passCode
     * @var 
     */
    private $passCode;

    /**
     * Summary of __construct
     * @param mixed $email
     * @param mixed $password
     * @param mixed $passCode
     */
    public function __construct($email, $password){
        //sets the value of the construct from data gotten from user sign up form 
        $this -> email = $email;
        $this -> password = $password;
        // set the value of the passcode from Signup  classs
        $this->passCode = $this -> returnPassCode();
    }

    /**
     * Summary of signUpUser
     * @return void
     */
    public function loginUser(){
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

        //if no error is handled then sign up user
        $this->getUser($this->email, $this->password);
    }

    /**
     * Summary of emptyInput
     * @return bool
     */
    private function emptyInput(){
        $result = false;
        
        //checks if the values in any input field is empty
        if(empty($this -> email) || empty($this -> password)){
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

}