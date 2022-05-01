<?php 

class Login extends Dbh{
    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT uesrs_pwd FROM users_info WHERE users_id = ? OR users_email = ?;');

        if($stmt->excute(array($uid, $pwd))){
            $stmt = null;
            exit();
        }
        if($stmt->rowCount() == 0){
            $stmt = null;
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwd[0]["users_id"]);

        if($checkPwd == false){
            $stmt = null;
            exit();
        }else {
            $stmt = $this->connect()->prepare('SELECT * FROM users_info WHERE users_id = ? OR users_email = ? AND users_pwd = ?;');

            if($stmt->excute(array($uid, $uid,$pwd))){
                $stmt = null;
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
        }

        $stmt =null;
    }
}