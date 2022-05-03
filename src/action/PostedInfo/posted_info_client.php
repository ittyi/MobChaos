<?php
require_once './Dao/getPostedInfoDao.class.php';
require_once './Class/Paging.class.php';

include './../../../layouts/common/view/header.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../layouts/css/Paging.css">
    <script src="js/base.js"></script>
</head>

<?php
    $contents_data = new getPostedInfoDao();

    //ページ毎の件数を設定
    $row_count = 3;

    //テーブル全体の件数を取得
    $cnt = $contents_data->getPostedInfoCount();

    //現在のページを取得 存在しない場合は1とする
    $page = 1;
    if(isset($_GET['page']) && is_numeric($_GET['page'])){
        $page = (int)$_GET['page'];
    }
    if(!$page){
        $page = 1;
    }

    
    $contents_data->getPostedInfo($page, $row_count);

    //オブジェクトを生成
    $pageing = new Paging();
    //1ページ毎の表示数を設定
    $pageing -> count = $row_count;
    //全体の件数を設定しhtmlを生成
    $pageing -> setHtml($cnt);

    //ページングクラスを表示
    echo $pageing -> html;

?>
