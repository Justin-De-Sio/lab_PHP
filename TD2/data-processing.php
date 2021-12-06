<?php
$action = $_POST['action'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
if(!empty( $_POST['action'])){
    if ($action == 'mailer') {
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : '  . $password. PHP_EOL;

        $to = 'desio.j@live.fr';
        $subject = 'le sujet';


        mail($to, $subject, $message);
    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

}

?>
<p><a href="index.php">retourner versTD2</a></p>

