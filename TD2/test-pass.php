<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];


    if (!empty($_POST)) {

        $query = "SELECT ID, PASSWORD FROM user  ID='$login'AND PASSWORD='$password'";
        $dbResult = connectDB($query);
        $dbRow = mysqli_fetch_assoc($dbResult);
        $loginBD = $dbRow['id'];
        $passwordBD = $dbRow['password'];
        echo $query;
        while($dbRow = mysqli_fetch_assoc($dbResult)) {
            echo $dbRow['id'] . '<br/>';
            echo $dbRow['password'] . '<br/>';
            echo '<br/><br/>';
        }

        if ($loginBD == $_POST['login'] && password_verify($_POST['password'], $passwordBD)) {
            session_start();
            $_SESSION['suid'] = session_id();
            header('location: welcome.php');

        } else {

//                header('location: index.php');
//                echo '<strong>logging ou mot de passe incorrect</strong>';
        }
    }

}
