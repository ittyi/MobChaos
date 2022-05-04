<?php
require_once './Dao/getPostedInfoDao.class.php';
require_once './Class/Paging.class.php';
?>
<?php

//$_GET['posted_user']が存在していれば
if(isset($_GET['posted_user']) && $_GET['posted_user'] != ''){
    echo '<strong>$_GET[\'posted_user\']が送信されました。値は[ '.$_GET['posted_user'].' ]です。'."</strong><br/>\n";
    
}else{
    echo '<strong>$_GET[\'posted_user\']はまだ送信されていません。'."</strong><br/>\n";
}

$contents_data = new getPostedInfoDao();
$data = $contents_data->getPostedInfoUser($_GET['posted_user']);

?>