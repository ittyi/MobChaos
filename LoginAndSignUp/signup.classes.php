<?php 

class Signup extends Dbh{
    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_id = ? OR users_email = ?;');

        if($stmt->excute(arra($uid, $email))){
            $stmt = null;
            header("location: ../scss/base.php?error=stmtfaild");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;
    }
}