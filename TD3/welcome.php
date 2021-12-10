<?php
session_start();
require '../utils.inc.php';
start_page('session');
if (!isset($_SESSION['suid'])) {
    die('Erreur d\'authentification');
} else {
    echo 'bienvenue';
}

end_page();