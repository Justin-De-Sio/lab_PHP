<?php
require 'base.php';

if (!empty($_POST)) {


    $dbRow = mysqli_fetch_assoc($dbResult = connectDB($query = "select * from user where id='$login'"));
    $loginDB = $dbRow['id'];
    $passwordDB = $dbRow['password'];

    if ($loginDB == $_POST['login'] && $passwordDB == $_POST['password']) {
        session_start();
        $_SESSION['suid'] = session_id();
        header('location: welcome.php');

    } else {

            echo '->>>>';
    echo $loginDB;
    echo $passwordDB;
    echo '<br> ' . $_POST['login'] . $_POST['password'];
//        header('location: index.php');

    }
}


