<?php
require '../utils.inc.php';
session_start();
start_page('session');
if (isset($_SESSION['suid'])) {
    echo "L'authentification est validée";
}
end_page();