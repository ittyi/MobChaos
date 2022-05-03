<?php
require_once 'Dbh.class.php';
?>
<?php
    class getPostedInfoDao {

        public function pri(){
            $p = new Dbh;
        }
        public function getPostedInfo(){
            

            $sql = 'SELECT * FROM T_POSTED_INFO;';
            $stmt = $pdo->query($sql);

            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<p>' . $data['POSTED_ID'] . ':' . $data['POSTED_USER_ID'] . "</p>\n";
              }
              
              $pdo = null;
        }
    }

?>