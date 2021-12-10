<?php
require 'base.php';
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];


    if (!empty($_POST)) {

            $query = "SELECT ID, PASSWORD FROM user WHERE ID='$login'AND PASSWORD='$password'";
            $dbResult = connectDB($query);
            $dbRow = mysqli_fetch_assoc($dbResult);


            echo '<br>'.'id :'.'$login' .'mdp :' .'<br>'. $password;
            if ($login == $_POST['login'] && password_verify($_POST['pwd'], $password)) {
                session_start();
                $_SESSION['suid'] = session_id();
                header('location: welcome.php');

            } else {
                $loginBD = $dbRow['id'] ;
                $login = $dbRow['password'] ;
//                header('location: index.php');
//                echo '<strong>logging ou mot de passe incorrect</strong>';
            }
        }

}
