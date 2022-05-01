<?php
class Dbh {
    private $dsn = 'mysql:dbname=MobChaos;host=192.168.33.13:3307';
    private $user = 'root';
    private $password = '';

    private $pdo;
    public function __construct() {
        try {
            $conn = new PDO($this->$dsn, $this->$user, $this->$password);
            //$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "connect";
            //$this->$pdo = $conn;
        } catch (PDOException $e) {
            print "Error!:" . $e->getMessage() . "<br/>";
        }
    }

    function getPdo(){
        return $this->$pdo;
    }

}

?>