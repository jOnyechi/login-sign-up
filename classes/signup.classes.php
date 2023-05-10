<?php

/**
 * Summary of SignUp
 */
class SignUp extends Dbh{

    //methods of querying in the database
    /**
     * Summary of checkUser
     * @param mixed $email
     * @return bool
     */
    protected function checkUser($email){
        $stmt = $this -> connect() -> prepare('SELECT user_email FROM login WHERE user_email = ?');

        //checks if the mySQL statement executes
        if(!$stmt -> execute(array($email))){
            $stmt = null; //deletes the mySql statement to be executed
            header("location: ../login.php?error=stmtFailed");
            exit();
        }

        //checks if the mySQL statement returns a value
        $resultCheck = false;
        if($stmt -> rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

    /**
     * Summary of setUser
     * @param mixed $email $passowrd $passCode
     * @return bool
     */
    protected function setUser($email, $password, $passCode){
        $stmt = $this -> connect() -> prepare('INSERT INTO login (user_email, user_password, user_passcode, login_created, last_login) values (?,?, ?, ?, ?)');

        /*hash password*/
        $pwdHashed = password_hash($password, PASSWORD_DEFAULT);

        /*get date and time for databse*/
        date_default_timezone_set('Europe/London');

        $dateCreated = date('d-m-y h:i:s', time());
        $lastlogin = date('d-m-y h:i:s', time());


        //checks if the mySQL statement executes
        if(!$stmt -> execute(array($email, $pwdHashed, $passCode, $dateCreated, $lastlogin))){
            $stmt = null; //deletes the mySql statement to be executed
            header("location: ../login.php?error=stmtFailed");
            exit();
        }

        //checks if the mySQL statement returns a value
        $resultCheck = false;
        if(!$stmt -> rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

 
    /**
     *Summary of checkPasscode
     *@param mixed $passcode
     *@return int
    */

    protected function returnPassCode(){
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

    protected function getUser($email){
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
            $_SESSION["userpasscode"] = $user[0]["user_passcode"];

    }
}