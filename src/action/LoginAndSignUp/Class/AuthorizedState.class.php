<?php 
require_once dirname(__FILE__) . '/UserState.class.php';
require_once dirname(__FILE__) . '/UnauthorizedState.class.php';
?>
<?php 
/*
*Concreate State
*認証後の状態
*/
class AuthorizedState implements UserState
{
    private static $singleton = null;

    private function __construct() {
    }

    public static function getInstance(){
        if (self::$singleton == null){
            self::$singleton = new AuthorizedState();
        }

        return self::$singleton;
    }

    public function isAuthenticated(){
        return true;
    }
    public function nextState() {
        //次の状態を返す
        return UnauthorizedState::getInstance();
    }
    public function getMenu() {
        $menu = '<a href="?mode=state">ログアウト</a>';
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