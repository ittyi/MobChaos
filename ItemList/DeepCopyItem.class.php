<?php
require_once dirname(__FILE__) . '/ItemPrototype.class.php';
?>
<?php
/**
 * ConcreteProtetype
 */
class DeepCopyItem extends ItemPrototype {
    /**
     * ディープコピー
     * 内部で保持しているオブジェクトもコピー
     */

     protected function __clone(){
         $this->setDetail(clone $this->getDetail());
     }
}
 ?>