<?php
$action = $_POST['action'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];

if ($action == 'mailer') {
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . $password . PHP_EOL;

    $to = $email;
    $subject = 'le sujet';


    mail($to, $subject, $message);
    echo '<br/>email bien envoyé !<br/>';
} else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';


}

?>

