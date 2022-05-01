<?php 

if(isset($_POST["submit"]))
{
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //インスタンス生成
    include dirname(__FILE__) . '/signup.classes.php';
    include dirname(__FILE__) . '/signup-contr.classes.php';

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    //エラーハンドラー
}