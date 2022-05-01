<?php
require_once dirname(__FILE__) . '/ItemPrototype.class.php';
?>
<?php
/**
 * Client
 */

 class ItemManager {
     private $item;

     public function __construct(){
         $this->items = array();
     }

     public function registItem(ItemProteType $item){
         $this->items[$item->getCode()] = $item;
     }
     /**
      * Prototypeクラスのメソッドを使って、新しいインスタンスを作成
      */
      public function create($item_code) {
          if (!array_key_exists($item_code, $this->items)){
              throw new Exception('item_code[' . $item_code . '] note exists');
          }
          $cloned_item = $this->items[$item_code]->newInstance();

          return $cloned_item;
     }
 }
?>