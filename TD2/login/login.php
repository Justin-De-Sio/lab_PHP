<?php
require '../../utils.inc.php';
require 'test-pass.php';
start_page('page de connection');
echo $_SESSION['error'];
?>
<h1>Login page</h1>
<form action="login.php" method="post">
    <div class="mb-3">
        <label class="form-label">Login <input class="form-control" type="text" name="login"></label>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password <input class="form-control" type="password"
                                                                              name="password"></label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
end_page();
?>
