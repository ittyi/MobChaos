<?php

// ドライバ呼び出しを使用して MySQL データベースに接続します
$dsn = 'mysql:dbname=MobChaos;host=192.168.33.13:3307';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

// $sql = 'SELECT * FROM T_POSTED_INFO;';
// $stmt = $pdo->query($sql);

// while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo '<p>' . $data['POSTED_ID'] . ':' . $data['POSTED_USER_ID'] . "</p>\n";
//   }
  
//   $pdo = null;
  
// ?>
  