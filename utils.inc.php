<?php
function start_page($titre)
{
?>
    <!DOCTYPE html>
<html lang="fr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <title><?php echo $titre; ?></title>

</head>
<body>
<?php
$rub1 = 'calculator';
$rub1addr = 'TD1/calculator.php';

$rub2form = 'Form';
$rub2formAddr = '/TD2/register/form.php';
$rub2signIn = 'Sign in';
$rub2signInAddr = '/TD2/login/login.php';

?>

<h1>Sommaire</h1>
<ul>
    <li><a href="<?php echo $rub1addr ?>"><?php echo $rub1 ?></a></li>
    <li><a href="<?php echo $rub2formAddr ?>"><?php echo $rub2form ?></a></li>
    <li><a href="<?php echo $rub2signInAddr ?>"><?php echo $rub2signIn ?></a></li>
</ul>


<?php
}
?>
<?php
function end_page(){
?>
</body>
</html>
<?php
}
?>

