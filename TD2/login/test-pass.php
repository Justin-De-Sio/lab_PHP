<?php
require '../base.php';
if (!empty($_POST)) {

    $login = $_POST['login'];

    $query = 'SELECT id,email,password FROM superjustin_td_php.user WHERE email=' . '\'' . $login . '\'';
    $dbRow = connectDB($query);

//    $query = 'UPDATE superjustin_td_php.user t SET t.conexion_counter = t.conexion_counter + 1 WHERE t.id =' . '\'' . $login . '\'';
//    connectDB($query);


    if ($dbRow[0]['email'] == $_POST['login'] && $_POST['password'] == $dbRow[0]['password']) {
        session_start();
        $_SESSION['suid'] = session_id();
        header('location: welcome.php');

    } else {
        $_SESSION['error'] = 'Identifiants incorrects, veuillez vérifier votre email et mot de passe. ';
        echo  $_SESSION['error'];
//        header('location: login.php');
    }

}
