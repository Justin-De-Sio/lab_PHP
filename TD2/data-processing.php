<?php

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

        $dbLink = mysqli_connect('mysql-superjustin.alwaysdata.net', '250372', 'U1234567890U',
            'superjustin_td_php')
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

        mysqli_select_db($dbLink, 'superjustin_td_php')
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
        );

        $query = "INSERT INTO user (date, email, id, state, password, phone,sex) VALUES ( '$today',
     '$email', '$id' , '$state' , '$password' , '$phone' ,'$sex' )";


        if(!($dbResult = mysqli_query($dbLink, $query)))
        {
            echo 'Erreur de requête<br/>';
            // Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            // Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }


    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

}

?>

<?php

?>
<?php

?>

