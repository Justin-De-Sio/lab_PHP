<?php
include 'utils.inc.php';
start_page('formulaire');
$action = $_POST['action'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
if ($action == 'mailer') {
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;

    $to      =  $email;
    $subject = 'le sujet';
    $message = 'Bonjour !';


    mail($to, $subject, $message);
}
else{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>


<?php
end_page();
?>
