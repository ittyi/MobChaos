<?php
require_once dirname(__FILE__) . '/ContentItem.class.php';
require_once dirname(__FILE__) . '/Content.class.php';
require_once dirname(__FILE__) . '/PrintContent.class.php';
?>
<?php
    /**
     * 木構造を作成
     */
    $root_entry = new Content("001", "ルートコンテンツ","true" );
    $root_entry->add(new Content("00101", "本","true"));
    $root_entry->add(new Content("00102", "本以外","true"));

    $content1 = new Content("010", "漫画","true");
    $content1->add(new ContentItem("01001", "コメント１", "false"));
    $content1->add(new ContentItem("01002", "コメント２", "false"));
    $content1->add(new ContentItem("01003", "コメント３", "false"));
    $content1->add(new ContentItem("01004", "コメント４", "false"));

    $content2 = new Content("110", "呪術廻船","true");
    $content2->add(new ContentItem("11101", "映画コメント", "false"));
    $content1->add($content2);
    $root_entry->add($content1);

    $content3 = new Content("020", "映画","true");
    $content3->add(new ContentItem("02001", "コメント１", "false"));
    $content3->add(new ContentItem("02002", "コメント２", "false"));
    $content3->add(new ContentItem("02003", "コメント３", "false"));
    $content3->add(new ContentItem("02004", "コメント４", "false"));
    $root_entry->add($content3);

    $tree_test = new PrintContent;
    $tree_test->MakeNewContent("999", "testparents", "false");


    /**
     * 木構造をダンプ
     */

     $root_entry->dump();
     $root_entry->parents_dump();
?>

<html lang="ja" dir="ltr">
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