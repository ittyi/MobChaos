<?php
require_once dirname(__FILE__) . '/ContentEntry.class.php';
?>
<?php
class Content extends ContentEntry {
    
    private $entries;

    public function __construct($code, $name, $parents_flg){
        parent::__construct($code, $name, $parents_flg);
        $this->entries = array();
    }

    /**
     * 子要素を追加する
     */
    public function add(ContentEntry $entry){
        array_push($this->entries, $entry);
    }

    /**
     * ツリー表示
     * 自分自身と保持している子要素を表示
     */
    public function dump(){
        parent::dump();
        foreach ($this->entries as $entry){
            $entry->dump();
        }
    }

    public function parents_dump(){
        parent::parents_dump();
        foreach ($this->entries as $entry){
            $entry->parents_dump();
        }
    }
}
?>