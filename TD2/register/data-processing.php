<?php
require '../base.php';

if (!empty($_POST)) {
    $action = $_POST['action'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $id = $_POST['user_name'];
    $phone = $_POST['phone'];
    $state = $_POST['pays'];
    $sex = $_POST['user_sex'];

    if ($action == 'mailer') {


      /*  $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . $password . PHP_EOL;

        $to = $email;
        $subject = 'le sujet';


        mail($to, $subject, $message);
        echo '<br/>email bien envoyé !<br/>';*/
        $query = 'INSERT INTO superjustin_td_php.user (date,id, email, state, password, phone,sex) VALUES ( NOW(),:id,
        :email , :state ,:password , :phone ,:sex )';
        connectDB();

        $PDOStatement = connectDB()->prepare($query);
        $PDOStatement->execute([
            'email'=>$email,
            'id'=> $id,
            'state'=>$state,
            'password'=>$password,
            'phone'=>$phone,
            'sex'=>$sex,
        ]);

        echo 'ok';
    } elseif ($action == 'rec') {
        $file = 'data.txt';
        if (!($file = fopen($file, 'a+'))) {
            echo 'Erreur d\'ouverture';
            exit();
        }
        fputs($file, 'id : ' . $id . ', email : ' . $email . PHP_EOL);
        fclose($file);
    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

}