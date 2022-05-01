<?php

abstract class ItemPrototype {
    private $item_code;
    private $item_name;
    private $users_id;
    private $detail;

    public function __construct($code, $name, $price){
        $this->item_code = $code;
        $this->item_name = $name;
        $this->users_id = $users_id;
    }

    public function getCode(){
        return $this->item_code;
    }

    public function getName(){
        return $this->item_name;
    }

    public function getUserId(){
        return $this->users_id;
    }

    public function setDetail(stdClass $detail){
        $this->detail = $detail;
    }

    public function getDetail(){
        return $this->detail;
    }

    public function dumpData(){
        echo '<dl>';
        echo '<dt>' . $this->getName() . '</dt>';
        echo '<dd>コンテンツID:' . $this->getCode() . '</dd>';
        echo '<dd>\\' . $this->getUserId() . '-</dd>';
        echo '<dd>' . $this->detail->comment . '</dd>';
        echo '</dl>';
    }

    /**
     * clone キーワードで新しいインスタンスを作成する
     */
    public function newInstance(){
        $new_instance = clone $this;
        return $new_instance;
    }

    /**
     * protectedメソッドにすることで、外部から直接cloneされない
     */
    protected abstract function __clone();
}

?>