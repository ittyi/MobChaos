<?php 
require_once dirname(__FILE__) . '/UnauthorizedState.class.php';
?>

<?php
/*
*Context
*/
class User {
    private $uid;
    private $state;
    private $count = 0;

    public function __construct($uid){
        $this->uid = $uid;
        //初期値
        $this->state = UnauthorizedState::getInstance();
        $this->resetCount();
    }

    
    public function switchState() {
        //状態を切り替える
        //echo "状態遷移:" . get_class($this->state) . "→";
        $this->state = $this->state->nextState();
        //echo get_class($this->state) . "<br>";
        $this->resetCount();
    }
    
    public function isAuthenticated(){
        return $this->state->isAuthenticated();
    }
    public function getMenu() {
        return $this->state->getMenu();
    }

    public function getUserId() {
        return $this->uid;
    }

    public function getCount(){
        return $this->count;
    }

    public function incrementCount(){
        $this->count++;
    }

    public function resetCount() {
        $this->count = 0;
    }
}
?>