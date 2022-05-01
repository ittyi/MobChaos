<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/base.css">
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
            <form method="get" action="#" class="search_container">
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