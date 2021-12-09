<?php
$dbLink = mysqli_connect('mysql-superjustin.alwaysdata.net', '250372', 'lol1234567890lol')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
?>
    Sélectionnez ensuite votre base de données :
<?php
$query='SELECT * FROM `user` ';

mysqli_select_db($dbLink , 'superjustin_td_php	')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);
?>
<?php
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur dans requête<br />';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
?>

