<?php
require '../utils.inc.php';
start_page('session');


if(!isset($_SESSION['suid']))
{
    die('Erreur d\'authentification');
}
else
{
    session_start();
    echo 'bievenue';
 }

end_page();