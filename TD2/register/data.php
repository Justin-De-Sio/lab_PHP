<?php
require '../../utils.inc.php';
start_page('data');

$file = 'data.txt';
if (!($file = fopen($file, 'r'))) {
    echo 'Erreur de lecture';
    exit();
}
echo 'Liste des tulisateurs : <br/>';
$cpt = 1;
while ($line = fgets($file, 255)) {
    echo 'Utilisateur n ' . $cpt . ' : ' . $line . '<br/>';
    ++$cpt;

}
?>

<?php
end_page();
?>
