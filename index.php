<?php
require 'utils.inc.php';
start_page('Sommaire');
$rub1 = 'calculator';
$rub1addr = 'TD1/calculator.php';

$rub2form = 'Form';
$rub2formAddr = 'TD2/register/form.php';
$rub2signIn = 'Sign in';
$rub2signInAddr = 'TD2/login/login.php';


?>

    <h1>Sommaire</h1>
    <ul>
        <li><a href="<?php echo $rub1addr ?>"><?php echo $rub1 ?></a></li>
        <li><a href="<?php echo $rub2formAddr ?>"><?php echo $rub2form ?></a></li>
        <li><a href="<?php echo $rub2signInAddr ?>"><?php echo $rub2signIn ?></a></li>
    </ul>


<?php
end_page();
?>