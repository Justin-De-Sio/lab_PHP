<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'connection') {
        $query = "SELECT ID, PASSWORD FROM user ";

        $dbResult = connectDB($query);
        while ($dbRow = mysqli_fetch_assoc($dbResult)) {
            if ($dbRow['id']==$login && $dbRow['password']=$password){
                header('welcome.php');
            }

        }
    }
}

