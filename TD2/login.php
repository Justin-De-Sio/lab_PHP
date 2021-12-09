<?php
require '../utils.inc.php';
require 'test-pass.php';
start_page('page de connection');
?>
<form action="login.php" method="post">
    <label>Login <input type="text" name="login"></label><br>
    <label>Passoword <input type="password" name="password"></label>
    <button type="submit" name="action" value="connection">ok</button>
</form>
<?php
end_page();
?>
