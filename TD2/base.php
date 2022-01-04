<?php
function connectDB()
{

    $user = '250372';
    $pass = 'U1234567890U';
    try {
        $db = new PDO('mysql:host=mysql-superjustin.alwaysdata.net;dbname=superjustin_td_php', $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $db ;


}


