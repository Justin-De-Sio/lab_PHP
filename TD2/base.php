<?php
function connectDB($query){
    $dbLink = mysqli_connect('mysql-superjustin.alwaysdata.net', '250372', 'U1234567890U',
        'superjustin_td_php')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink, 'superjustin_td_php')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));


    if(!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur de requête<br/>';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
}





/*while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['id'] . '<br/>';
    echo $dbRow['email'] . '<br/>';
    echo $dbRow['date'] . '<br/>';
    echo '<br/><br/>';*/
