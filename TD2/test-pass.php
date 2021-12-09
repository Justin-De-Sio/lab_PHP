<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'connection') {
        $query = "SELECT ID, PASSWORD FROM USER ";
         connectDB($query);
    }
}

