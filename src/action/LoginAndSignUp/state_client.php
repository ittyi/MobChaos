<?php 
require_once './Class/User.class.php';
require_once './Dao/getLoginInfoDao.class.php';
?>

<?php
    $context;
    $db_userid;
    $db_pwd;
    $stateflg = FALSE;
    session_start();
    ini_set('session.gc_maxlifetime', 60 * 60 * 24);
    $context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
    if(is_null($context)) {
        $context = new User($_POST['uid']);
    }

    if(isset($_POST['login'])){
        //DBからユーザ情報を取得
        $data = new getLoginInfoDao();
        $login_info = $data->getPostedInfo($_POST['uid']);
        
        $db_userid = $login_info[0];
        $db_pwd = $login_info[1];

        if ($_POST['uid'] == $db_userid && $_POST['pwd'] == $db_pwd){
            $stateflg = TRUE;
            $message = 'ログインしました。';
        }
        else{
            $message = 'ユーザー名かパスワードが間違っています。';
            echo '<script type="text/javascript"> alert(' . $message . ');</script>';
            session_destroy();
        }
        
        
    }else if(isset($_POST['logout'])) {
        $stateflg = True;
    }else{
    }

    $mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
    switch ($mode){
        case 'state':
            if ($stateflg)
            {
                //echo '<p style=""color: #aa0000">状態を遷移します</p>';
                $context->switchState();
                if (!$context->isAuthenticated())
                {
                    session_destroy();
                }else {
                    
                }

                break;
            }
    }

    $_SESSION['context'] = $context;
?>

<?php

if( !$context->isAuthenticated()):
    //初期表示時、ログイン画面を表示する
    include './../../../layouts/view/login.php';
else:
    header('Location: http://192.168.3.11/mob/src/action/PostedInfo/posted_info_client.php');
?> 
<?php
endif;

$test = $context->getMenu();
prnt_r($test);
?>