<?php
function connectDB($query)
{

    $user = '250372'    ;
    $pass= 'U1234567890U';
    try {
        $db = new PDO('mysql:host=mysql-superjustin.alwaysdata.net;dbname=superjustin_td_php', $user, $pass);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $recipesStatement = $db->prepare($query);
    $recipesStatement->execute();
    return $recipesStatement->fetchAll();


}


