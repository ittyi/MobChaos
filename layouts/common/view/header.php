<?php
require_once "/var/src/MoBChaos/src/action/LoginAndSignUp/Class/User.class.php"
?>
<?php
    $context;
    $stateflg = FALSE;
    session_start();
    ini_set('session.gc_maxlifetime', 60 * 60 * 24);
    $context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
    if(is_null($context)) {
        $context = new User($_POST['uid']);
    }
    
    if(isset($_POST['logout'])) {
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
    //include './../../../layouts/view/login.php';
    header('Location: ./../../../src/action/LoginAndSignUp/state_client.php')
?> 
<?php
endif;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../../layouts/common/css/base.css">
    <link rel="stylesheet" href="./../../../layouts/css/file_upload.css">
    <link rel="stylesheet" href="./../../../layouts/css/Paging.css">
    <script src="js/base.js"></script>
</head>
<body>
    <!-- Header Start -->
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <a href="#" class="brand">Brand</a>
        <nav class="nav">
          <button class="nav__toggle" aria-expanded="false" type="button">
            menu
          </button>
          <ul class="nav__wrapper">
            <li class="nav__item center"><a href="#">ホーム</a></li>
            <li class="nav__item center"><a href="#">新着</a></li>
            <li class="nav__item center"><a href="#">ランキング</a></li>
            <li class="nav__item center"><a href="#">お気に入り</a></li>
            <li class="nav__item">
            <form method="get" action="./../../action/PostSearch/post_search_client.php" class="search_container">
                <button type="submit" name="refine_search">絞り込み検索</button>
                <input type="text" size="25" placeholder="キーワード検索">
                <input type="submit" value="検索">
              </form>
            </li>
            <li class="nav__item center"><a href="./../LoginAndSignUp/sinup.php">サインアップ</a></li>
            <li class="nav__item center">
              <form method='post' action="?mode=state" >
                <button type="submit" name="logout">ログアウト</button>
              </form> 
            </li>
            <li class="nav__item center"><a href="#">プロフィール</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header End -->