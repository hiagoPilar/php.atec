<?php 

class Signup extends Dbh
{
    private $username;
    private $pwd;

    public function __constructor($username, $pwd){
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser(){
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd)";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username",$this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
        if(isset($this->username) && isset($this->pwd)){
            return false;
        } else {
            return true;
        }
    }

    public function signupUser()
    {
        // error handlers
        if($this->isEmptySubmit()){
            header("Location " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }

        //if no errors, signup user

    }
}