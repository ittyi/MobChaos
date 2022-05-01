<?php 
require_once dirname(__FILE__) . '/User.class.php';
require_once './../dao/dbconect.php';
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
        $db_server = mysql_connect($host, $user, $password);
        if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());

        mysql_select_db($dbName) or die("Unable to select database: " . mysql_error());

        $query = "SELECT * FROM userinfo WHERE users_id = '" . $_POST['uid'] . "'";
        $result = mysql_query($query);

        if (!$result) die ("Database access faild: " . mysql_error());

        $rows = mysql_num_rows($result);
        if ($rows==0) 
        {
            echo '<script type="text/javascript"> alert("User Not Found");</script>';
        }


        for($j=0; $j < $rows; ++$j){
            //echo "userid: " . mysql_result($result, $j, 'users_id') . '<br />';
            $db_userid = mysql_result($result, $j, 'users_id');
            $db_pwd = mysql_result($result, $j, 'users_pwd');
        }

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
        echo "ポスト来てないのやけど";
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
                }
                break;
            }
    }

    $_SESSION['context'] = $context;
    
    // echo 'ようこそ' . $context->getUserId() . 'さん<br>';
    // echo 'パスワード:' . $context->getPassword() . '<br>';
    // echo '現在ログインして' . ($context->isAuthenticated() ? 'います' : 'いません') . '<br>';
    // echo '現在のカウント:' . $context->getCount() . '<br>';
    // echo $context->getMenu() . '<br>';
?>

<?php
if( !$context->isAuthenticated()):
    include dirname(__FILE__) . '/login.php';
else:
 include dirname(__FILE__) . './../layouts/base.html';
?>
<?php
endif;
?>