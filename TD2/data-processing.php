<?php
require 'base.php';

if (!empty($_POST)) {
    $action = $_POST['action'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $id = $_POST['user_name'];
    $phone = $_POST['phone'];
    $state = $_POST['pays'];
    $sex = $_POST['user_sex'];

    if ($action == 'mailer') {


        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . $password . PHP_EOL;

        $to = $email;
        $subject = 'le sujet';


        mail($to, $subject, $message);
        echo '<br/>email bien envoyé !<br/>';

        $query = "INSERT INTO user (date, email, id, state, password, phone,sex) VALUES ( NOW(),
        '$email', '$id' , '$state' , '$password' , '$phone' ,'$sex' )";

       $dbRow = mysqli_fetch_assoc($dbResult=connectDB("SELECT ID, PASSWORD FROM user WHERE ID='123'AND PASSWORD='oui'"));
            echo $dbRow['id'] . '<br/>';
            echo $dbRow['password'] . '<br/>';
            echo '<br/><br/>';


    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }


}


