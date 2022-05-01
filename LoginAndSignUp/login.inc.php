<?php

if(isset($_POST["submit"]))
{
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once "/login.class.php";
    require_once "/login-contr.class.php";

    $login =  new LoginCotr($uid, $pwd);

    $login->loginUser();
}

?>