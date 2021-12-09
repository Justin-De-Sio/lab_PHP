<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'connection') {
        $query = "SELECT ID, PASSWORD FROM user WHERE ID='$login'AND PASSWORD='$password'";
        echo $query;
        $dbResult = connectDB($query);
        $dbRow = mysqli_fetch_assoc($dbResult);
        if (!empty($dbRow)) {
            /* Redirection vers une page différente du même dossier */
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'welcome.php';
            header("Location: http://$host$uri/$extra");
            exit;
        }
    }
}
