<?php
require '../utils.inc.php';
require 'test-pass.php';
start_page('page de connection');
echo $_SESSION['error'];
?>

<form action="login.php" method="post">
    <label>Login <input type="text" name="login"></label><br>
    <label>password <input type="password" name="password"></label>
    <button type="submit">ok</button>
</form>
<?php
end_page();
?>
