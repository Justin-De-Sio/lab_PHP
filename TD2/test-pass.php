<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (filter_input(INPUT_POST, 'login') && filter_input(INPUT_POST, 'password')) {
        $query = "SELECT ID, PASSWORD FROM user WHERE ID='$login'AND PASSWORD='$password'";
        $dbResult = connectDB($query);
        $dbAssoc = mysqli_fetch_assoc($dbResult);
        $login = $dbAssoc['id'];
        $password = $dbAssoc['password'];


        if ($login == $_POST['login'] && password_verify($_POST['password'], $password)) {
            session_start();
            $_SESSION['suid'] = session_id();
            header('location: welcome.php');
        } else {
            start_page('erreur');
            echo "<strong>logging ou mot de passe incorrect</strong> , '$login' , '$password','$dbAssoc ','$dbResult'";

        }
    }

}
