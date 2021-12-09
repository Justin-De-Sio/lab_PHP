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
       /* if (empty($dbRow)){
            header('Location : welcome.php');
        }*/



    }
}

