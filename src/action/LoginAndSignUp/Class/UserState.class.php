<?php
/**State クラス
 * 状態ごとの動作、振る舞いを定義する
 */

interface UserState{
    public function isAuthenticated();
    public function nextState();
    public function getMenu();
}
?>