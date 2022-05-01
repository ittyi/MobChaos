<?php 

class LoginContr extends Login{

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this->$uid = $uid;
        $this->$pwd = $pwd;
    }

    public function loginUser() {
        if($this->emptyInput() == false){
            exit();
        }
        

        $this->getUser($this->uid,$this->pwd);
    }

    private function emptyInput(){
        $result;
        if(empty($this->$uid) || empty($this->$pwd)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$", $this->uid)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var(FILTER_VALDATE_EMAIL)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(){
        $result;
        if(!checkUser($this->$uid, $this->$email)){
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}