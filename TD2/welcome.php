<?php
session_start();
if (isset($_SESSION['suid'])) {
    echo "L'authentification est validée";
}
end_page();