<?php
require_once dirname(__FILE__) . '/ItemPrototype.class.php';
?>
<?php
/**
 * ConcreteProtetype
 */
class ShallowCopyItem extends ItemPrototype {
    /**
     * 浅いコピー
     * からの実装
     */

     protected function __clone(){
     }
}
 ?>