<?php 
require_once dirname(__FILE__) . '/UserState.class.php';
require_once dirname(__FILE__) . '/AuthorizedState.class.php';
?>
<?php 
/*
*Concreate State
*未認証
*/
class UnauthorizedState implements UserState
{
    private static $singleton = null;

    private function __construct() {
    }

    public static function getInstance(){
        if (self::$singleton == null){
            self::$singleton = new UnauthorizedState();
        }

        return self::$singleton;
    }

    public function isAuthenticated(){
        return false;
    }
    public function nextState() {
        //次の状態を返す
        return AuthorizedState::getInstance();
    }
    public function getMenu() {
        $menu = '<button><a href="?mode=state">ログイン</a></button>';
        return $menu;
    }

    /**
     * このインスタンスの複製を許可しない
     * @throws RuntimeException
     */

    public final function __clone(){
        throw new RuntimeException('Clone is not allowed against' . get_class($this));
    }
}
?>