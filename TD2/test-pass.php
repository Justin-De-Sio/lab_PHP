<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];




    if (!empty($_POST)) {


        $dbRow = mysqli_fetch_assoc($dbResult = connectDB($query = 'select * from user'));
        $loginDB = $dbRow['id'];
        $passwordDB = $dbRow['password'];


        if ($loginDB == $_POST['login'] && password_verify($_POST['password'], $passwordDB)) {
            session_start();
            $_SESSION['suid'] = session_id();
            header('location: welcome.php');

        } else {

                header('location: index.php');
//                echo '<strong>logging ou mot de passe incorrect</strong>';
        }
    }

}
