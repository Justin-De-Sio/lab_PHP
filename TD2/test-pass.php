<?php
require 'base.php';
if (!empty($_POST)) {


    $login = $_POST['login'];

    $dbRow = mysqli_fetch_assoc($dbResult = connectDB($query = 'select * from user where id=\'$login\''));

    if ($dbRow['id'] == $_POST['login'] && $_POST['password'] == $dbRow['password']) {
        session_start();
        $_SESSION['suid'] = session_id();
        header('location: welcome.php');

    } else {
        header('location: index.php');
    }

}
