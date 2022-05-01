<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/base.css">
    <script src="js/base.js"></script>
    <script type="text/javascript">
function PwdEmptyCheck() {
    if (login_frm.uid.value=="")
    {
        alert("ユーザIDを入力してね");
        return false;
    }else{
        return true;
    }
};
</script> 

</head>
<body>


<h2>Sign In</h2>
<form method='post' action="?mode=state" name="login_frm">
    <input type="text" name="uid" placeholder="Username...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login" onclick="return PwdEmptyCheck()">ログイン</button>
</form>   


</body>
</html>


<?php
require_once './../dao/dbconect.php';
$db_server = mysql_connect($host, $user, $password);
if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($dbName) or die("Unable to select database: " . mysql_error());

$query = "SELECT * FROM userinfo WHERE users_id = 'test'";
$result = mysql_query($query);

if (!$result) die ("Database access faild: " . mysql_error());

$rows = mysql_num_rows($result);

for($j=0; $j < $rows; ++$j){
    echo "userid: " . mysql_result($result, $j, 'users_id') . '<br />';
}
?>
