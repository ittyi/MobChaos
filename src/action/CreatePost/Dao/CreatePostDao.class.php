<?php
    class CreatePostDao {
        private $dsn;
        private $user;
        private $password;

        function __construct(){
            //$this->$dbh = $this->connect();
            // ドライバ呼び出しを使用して MySQL データベースに接続します
            $dsn = 'mysql:dbname=MOB;host=192.168.33.13:3307';
            $user = 'root';
            $password = '';

            $this->dsn = $dsn;
            $this->user = $user;
            $this->password = $password;
        }
        
        //画像を登録する
        public function addPostedInfo($image){
            try {
                $pdo = new PDO($this->dsn, $this->user, $this->password);
            } catch (PDOException $e) {
                echo "接続失敗: " . $e->getMessage() . "\n";
                exit();
            }

            $sql = "INSERT INTO T_IMAGES(FILE_ID) VALUES (:image)";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        }
        }
?>