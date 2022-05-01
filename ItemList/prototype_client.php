<?php
require_once dirname(__FILE__) . '/ItemManager.class.php';
require_once dirname(__FILE__) . '/DeepCopyItem.class.php';
require_once dirname(__FILE__) . '/ShallowCopyItem.class.php';

function testCopy(ItemManager $manager, $item_code){
    $item1 = $manager->create($item_code);
    $item2 = $manager->create($item_code);

    /**
     * 1つだけコメントを削除
     */

     $item2->getDetail()->comment = "コメントを書き換えました";

     /**
      * 
      */
      echo "オリジナル";
      $item1->dumpData();
      echo "コピー";
      $item2->dumpData();
      echo "<hr>";
}
?>
<?php
 $manager = new ItemManager();

 /**
  * コンテンツ登録
  */
  $item = new DeepCopyItem("ABC0001", "漫画", "testtest");
  $detail = new stdClass();
  $detail->comment = "コメントA";
  $item->setDetail($detail);
  $manager->registItem($item);

  testCopy($manager, "ABC0001", "漫画", "testtest");
?>

