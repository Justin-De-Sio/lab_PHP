<?php
include 'utils.inc.php';
start_page('formulaire');
$action = $_POST['action'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
if(!empty( $_POST['action'])){
    if ($action == 'mailer') {
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . PHP_EOL . $password;

        $to = 'desio.j@live.fr';
        $subject = 'le sujet';


        mail($to, $subject, $message);
    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

}
else
    echo 'ok';
?>
<p><a href="index.php">retourner versTD2</a></p>

<?php
end_page();
?>
