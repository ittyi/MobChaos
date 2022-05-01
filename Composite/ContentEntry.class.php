<?php
/**
 * Component 
 */

 abstract class ContentEntry {

    private $code;
    private $name;
    private $parents_flg;

    public function __construct($code, $name, $parents_flg){
        $this->code = $code;
        $this->name = $name;
        $this->parents_flg = $parents_flg;
    }

    public function getCode(){
        return $this->code;
    }

    public function getName(){
        return $this->name;
    }

    public function getParentsFlg(){
        return $this->parents_flg;
    }

    /**
     * 子要素を追加する
     */
    public abstract function add(ContentEntry $entry);

    /**
     * 投稿内容ツリーを表示する
     */
    public function dump(){
        echo $this->code . ":" . $this->name . "<br>\n";
    }

    public function parents_dump(){
        print_r($parents_flg);
        if ($this->parents_flg == "true"){
            echo "親投稿だお-" . $this->code . ":" . $this->name . "<br>\n";
        } else{
            echo "子投稿だから表示しないはず-" . $this->code . ":" . $this->name . "<br>\n";
        }
    }
 }
?>