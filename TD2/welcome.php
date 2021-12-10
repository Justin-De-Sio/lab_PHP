<?php
require '../utils.inc.php';
start_page('session');

session_start();
if(!isset($_SESSION['suid']))
{
    die('Erreur d\'authentification');
}
else
{
    echo 'bievenue';
 }

end_page();