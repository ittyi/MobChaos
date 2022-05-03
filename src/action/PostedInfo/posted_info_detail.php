<?php
require_once './Dao/getPostedInfoDao.class.php';
require_once './Class/Paging.class.php';
?>
<?php
//$_GET['user_id']が存在していれば
if(isset($_GET['user_id']) && $_GET['user_id'] != ''){
    echo '<strong>$_GET[\'user_id\']が送信されました。値は[ '.$_GET['user_id'].' ]です。'."</strong><br/>\n";
    ?>
<?php
}else{
    echo '<strong>$_GET[\'user_id\']はまだ送信されていません。'."</strong><br/>\n";
}

$contents_data = new getPostedInfoDao();
$data = $contents_data->getPostedInfoDetail($_GET['user_id']);

foreach($row as $data){
    print_r($data);
    echo $row['POSTED_ID'];
}
?>