<?php
require 'base.php';
if (!empty($_POST)) {


    $login = $_POST['login'];

    $dbRow = mysqli_fetch_assoc($dbResult = connectDB($query = "select * from user where id='$login'"));
    $loginDB = $dbRow['id'];
    $passwordDB = $dbRow['password'];

    if ($loginDB == $_POST['login'] && $_POST['password'] == $passwordDB) {
        session_start();
        $_SESSION['suid'] = session_id();
        header('location: welcome.php');

    } else {

        header('location: index.php');
//                echo '<strong>logging ou mot de passe incorrect</strong>';
    }

}
