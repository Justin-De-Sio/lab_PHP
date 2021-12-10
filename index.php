<?php
require 'utils.inc.php';
start_page('Sommaire');
$rub1 = 'calculator';
$rub1addr= 'TD1/calculator.php';

?>

<h1>Sommaire</h1>
<ul>
    <li><a href="<?php echo $rub1addr ?>"><?php echo $rub1 ?></a></li>
    <li><a href="TD2/index.php">TD2</a></li>
</ul>


<?php
end_page();
?>