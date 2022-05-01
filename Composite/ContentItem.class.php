<?php
require_once dirname(__FILE__) . '/ContentEntry.class.php';
require_once dirname(__FILE__) . '/ContentItem.class.php';
require_once dirname(__FILE__) . '/Content.class.php';
?>
<?php
/**
 * Leaf
 */

 class ContentItem extends ContentEntry {
     
    public function __construct($code, $name, $parents_flg){
        parent::__construct($code, $name, $parents_flg);
    }

    /**
     * 子要素を追加
     * Leafクラスは子要素を持たないので、例外を発生させる
     */
    public function add(ContentEntry $entry){
        throw new Exception('method not allowed');
    }
 }
?>