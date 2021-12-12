<?php
require '../base.php';
if (!empty($_POST)) {


    $login = $_POST['login'];
    $query = 'select * from superjustin_td_php.user where email=' . '\'' . $login . '\'';
    $dbRow = mysqli_fetch_assoc($dbResult = connectDB($query ));

    $query = 'UPDATE superjustin_td_php.user t SET t.conexion_counter = t.conexion_counter + 1 WHERE t.id =' . '\'' . $login . '\'';
    connectDB($query);

    if ($dbRow['email'] == $_POST['login'] && $_POST['password'] == $dbRow['password']) {
        session_start();
        $_SESSION['suid'] = session_id();
        header('location: welcome.php');

    } else {
        $_SESSION['error'] = 'Identifiants incorrects, veuillez vérifier votre email et mot de passe. ';
        header('location: login.php');
    }

}
