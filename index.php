<?php
require 'utils.inc.php';
start_page('Sommaire');
$rub1 = 'calculator';
$rub1addr= 'TD1/calculator.php';
$rub2 = 'TD2';
$rub2addr ='TD2/index.php';
$rub3 = 'TD3';
$rub3addr ='TD3/index.php';

?>

<h1>Sommaire</h1>
<ul>
    <li><a href="<?php echo $rub1addr ?>"><?php echo $rub1 ?></a></li>
    <li><a href="<?php echo $rub2addr ?>"><?php echo $rub2 ?></a></li>
    <li><a href="<?php echo $rub3addr ?>"><?php echo $rub3 ?></a></li>
</ul>


<?php
end_page();
?>