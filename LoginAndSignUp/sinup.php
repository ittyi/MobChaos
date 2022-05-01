<?php 
 include dirname(__FILE__) . './../layouts/header.php';
?>

<h2>Sign Up</h2>
<form action="signup.inc.php" method='post'>
    <input type="text" name="name" placeholder="Full name...">
    <input type="text" name="uid" placeholder="Email...">
    <input type="text" name="pwd" placeholder="Username...">
    <input type="password" name="pwdrepeat" placeholder="Password...">
    <input type="password" name="submit" placeholder="Repeat password...">
    <button type="submit" name="submit">Sign Up</button>
</form>

<?php 
 include dirname(__FILE__) . '/footer.php';
?>
