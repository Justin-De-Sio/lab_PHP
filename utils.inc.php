<?php
function start_page($titre)
{
?>
    <!DOCTYPE html>
<html lang="fr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <title><?php echo $titre; ?></title>

</head>
<body>
<?php
$index = '/index.php';
$rub1 = 'calculator';
$rub1addr = '/TD1/calculator.php';

$rub2form = 'Form';
$rub2formAddr = '/TD2/register/form.php';
$rub2signIn = 'Sign in';
$rub2signInAddr = '/TD2/login/login.php';
$rub3libraryAddr='/Library/home.php';
$rub3='Library'

?>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?php echo $index ?>" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="<?php echo $rub1addr ?>" class="nav-link px-2 link-dark"><?php echo $rub1 ?></a></li>
            <li><a href="<?php echo $rub3libraryAddr ?>" class="nav-link px-2 link-dark"><?php echo $rub3 ?></a></li>

        </ul>

        <div class="col-md-3 text-end">
            <a class="btn btn-primary" href="<?php echo $rub2signInAddr ?>" role="button">Login</a>
            <a class="btn btn-primary" href="<?php echo $rub2formAddr ?>" role="button">Sign-up</a>
        </div>
    </header>
</div>


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

