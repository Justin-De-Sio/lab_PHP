<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'connection') {
        $query = "SELECT ID, PASSWORD FROM user ";


        while ($dbRow = mysqli_fetch_assoc($dbResult = connectDB($query))) {
            if ($dbRow['id']==$login && $dbRow['password']=$password){

            }

        }
    }
}

