<?php
$dbLink = mysqli_connect('mysql-superjustin.alwaysdata.net', '250372', 'U1234567890U','superjustin_td_php	
')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
?>
    Sélectionnez ensuite votre base de données :
<?php
mysqli_select_db($dbLink , 'superjustin_td_php	')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);
?>

