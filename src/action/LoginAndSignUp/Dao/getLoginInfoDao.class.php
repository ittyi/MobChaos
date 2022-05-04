<?php
    class getLoginInfoDao {
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
        
        public function getPostedInfo($user_id){
            try {
                $pdo = new PDO($this->dsn, $this->user, $this->password);
            } catch (PDOException $e) {
                echo "接続失敗: " . $e->getMessage() . "\n";
                exit();
            }

            $sql = "SELECT mail_address, user_id, password FROM M_USER WHERE user_id = '" . $user_id . "'";
            $stmt = $pdo->query($sql);
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (count($rows) == 0)
            {
                echo '<script type="text/javascript"> alert("User Not Found");</script>';
            } else {
            }
            
            $pdo = null;
            return array($rows["user_id"], $rows["password"]);

        }
    }
?>