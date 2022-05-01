<?php
    class getPostedInfoDao {
        private $dsn;
        private $user;
        private $password;

        function __construct(){
            //$this->$dbh = $this->connect();
            // ドライバ呼び出しを使用して MySQL データベースに接続します
            $dsn = 'mysql:dbname=MobChaos;host=192.168.33.13:3307';
            $user = 'root';
            $password = '';

            $this->dsn = $dsn;
            $this->user = $user;
            $this->password = $password;
        }
        
        public function getPostedInfo(){
            try {
                $pdo = new PDO($this->dsn, $this->user, $this->password);
            } catch (PDOException $e) {
                echo "接続失敗: " . $e->getMessage() . "\n";
                exit();
            }

              $sql = 'SELECT * FROM T_POSTED_INFO;';
              $stmt = $pdo->query($sql);
  
              ?>
              <?php
              $cnt = 0;
              while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $cnt+=1 ?>
                <p><?php echo $data['POSTED_ID'] . ':' . $data['POSTED_USER_ID']?></p>
                <p><a href="posted_info_detail.php?id=<?php echo $cnt; ?>">詳細はこちらから</a><p>
                <?php }
            
              $pdo = null;
              
        }

        public function getPostedInfoDetail(){
            try {
                $pdo = new PDO($this->dsn, $this->user, $this->password);
            } catch (PDOException $e) {
                echo "接続失敗: " . $e->getMessage() . "\n";
                exit();
            }

            $sql = 'SELECT * FROM T_REPLY_POSTED_INFO WHERE ;';
            $stmt = $pdo->query($sql);
        }
    }?>

