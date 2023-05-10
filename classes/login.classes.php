<?php

/**
 * Summary of SignUp
 */
class Login extends Dbh{
    /**
     * Summary of getUser
     * @param mixed $email $password 
     * @return 
     */
    protected function getUser($email, $password){
        $stmt = $this -> connect() -> prepare('SELECT user_password FROM login WHERE user_email = ?');

        //checks if the mySQL statement executes
        if(!$stmt -> execute(array($email))){
            $stmt = null; //deletes the mySql statement to be executed
            header("location: ../login.php?error=stmtFailed");
            exit();
        }

        //check if stmt returns data
        if($stmt -> rowCount() == 0){
            $stmt = null;
            header("location: ../login.php?error=usernotfound");
            exit();
        }

        // check password match
        // returns the value of the array with a associative array
        //use the passowrd_verify function

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $pwdHashed[0]["user_password"]);

        if($checkPassword == false){
            $stmt = null;
            header("location: ../login.php?check-password-hash-error");
            exit();
        }

        elseif($checkPassword == true){
            $stmt = $this -> connect() -> prepare('SELECT * FROM login WHERE user_email = ?');
            
            //checks if the mySQL statement executes
            if(!$stmt -> execute(array($email))){
                $stmt = null; //deletes the mySql statement to be executed
                header("location: ../login.php?error=stmtFailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null; //deletes the mySql statement to be executed
                header("location: ../login.php?error=userDosNotExist");
                exit();
            }

            //user successfully logs in 
            // change date on the last login of user 
            // fetch all relevant information
            //set session attributes 
            $user = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useremail"] = $user[0]["user_email"];
            
            $this->updatePasscode($_SESSION["userid"]);
            $this->updateLastLogin($_SESSION["userid"]);

        }

    }

 
    /**
     *Summary of checkPasscode
     *@param mixed $passcode
     *@return int
    */

    protected function returnPasscode(){
        do{
            $passcode = mt_rand(100000, 999999);

            $stmt = $this -> connect() -> prepare('SELECT user_passcode FROM login WHERE user_passcode = ?');
            if(!$stmt->execute(array($passcode))){
                $stmt = null; //deletes the mySql statement to be executed
                header("location: ../login.php?error=passcodeStmtFailed");
                exit();
            }
        }while($stmt->rowCount() > 0);
        
        return $passcode;
    }

    protected function updatePasscode($userId){

        $stmt = $this -> connect() -> prepare('UPDATE login SET user_passcode = ? WHERE id = ?');
        $newPasscode = $this->returnPasscode();

        if(!$stmt->execute(array($newPasscode, $userId))){
            $stmt = null; //deletes the mySql statement to be executed
            header("location: ../login.php?error=updatepasscodeStmtFailed");
            exit();
        }
    }

    protected function updateLastLogin($userId){
        $stmt = $this -> connect() -> prepare('UPDATE login SET last_login = ? WHERE id = ?');

        /*get date and time for databse*/
        date_default_timezone_set('Europe/London');
        $lastLogin = date('d-m-y h:i:s', time());

        if(!$stmt->execute(array($lastLogin, $userId))){
            $stmt = null; //deletes the mySql statement to be executed
            header("location: ../login.php?error=updatepasscodeStmtFailed");
            exit();
        }

    }
}