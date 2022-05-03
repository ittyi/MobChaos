<?php
require_once dirname(__FILE__) . '/getPostedInfoDao.class.php';
?>
<?php
  $output = new getPostedInfoDao;
  $output->pri();
  //$output->getPostedInfo();
?>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>サンプルページ</title>
  </head>
  <body>
 
    <ul>
      <?php for ($i = 1; $i <= 10; $i++) { ?>
        <li><?php echo $i; ?></li>
      <?php } ?>
    </ul>
 
  </body>
</html>