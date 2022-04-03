<?php 
require_once dirname(__FILE__) . '/User.class.php';
?>

<?php

    
    $password = "test";

    session_start();
    if(isset($_POST['login'])){
        if ($_POST['uid'] == $user && $_POST['pwd'] == $password){
            $message = 'ログインしました。';
        }
        else{
            $message = 'ユーザー名かパスワードが間違っています。';
        }
    }

    $context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
    if(is_null($context)) {
        $context = new User('ほげ');
    }

    $mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
    switch ($mode){
        case 'state':
            //echo '<p style=""color: #aa0000">状態を遷移します</p>';
            $context->switchState();
            break;
    }

    $_SESSION['context'] = $context;
    
    // echo 'ようこそ' . $context->getUserId() . 'さん<br>';
    // echo '現在ログインして' . ($context->isAuthenticated() ? 'います' : 'いません') . '<br>';
    // echo '現在のカウント:' . $context->getCount() . '<br>';
    // echo $context->getMenu() . '<br>';
?>

<?php
if( !$context->isAuthenticated()):
?>
    <h2>Sign In</h2>
    <form method='post' action="./">
        <input type="text" name="uid" placeholder="Userid..">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login"><a href="?mode=state">ログイン</a></button>
    </form>
<?php
else:
 include dirname(__FILE__) . './../layouts/base.html';
?>
<?php
endif;
?>