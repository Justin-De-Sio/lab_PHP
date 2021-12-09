<?php
require 'base.php';
$action = $_POST['action'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
$id = $_POST['user_name'];
$phone = $_POST['phone'];
$state = $_POST['pays'];
$sex = $_POST['user_sex'];

if (!empty($_POST)) {
    if ($action == 'mailer') {
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . $password . PHP_EOL;

        $to = $email;
        $subject = 'le sujet';


        mail($to, $subject, $message);
        echo '<br/>email bien envoyé !<br/>';
        $today = date('Y-m-d');
        $query = "INSERT INTO user (date, email, id, state, password, phone,sex) VALUES ( '$today',
        '$email', '$id' , '$state' , '$password' , '$phone' ,'$sex' )";
        connectDB($query);

    }


} else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

}


