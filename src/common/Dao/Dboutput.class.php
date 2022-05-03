<?php
require_once dirname(__FILE__) . '/Dbh.class.php';
?>

<?php
    class Dboutput extends Dbh {
        function __construct(){
            $this->$dbh = $this->connect();

        }
        
        function test(){
            $sql = 'select * from userinfo';
            $stmt = $dbh->query($sql);

            $user = $stmt->fetchAll(PDO::FETCH_BOTH);
            foreach($user as $u){
                echo $u['users_id'];
            }
        }
            
    }

    
?>
