<?php
include 'start_end.php';

start_page('calcul');

$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$action = $_GET['action'];

if ($op1==''){
    $op1=0;
}
if ($op2==''){
    $op2=0;
}

function result($op,$op1,$op2){

    if ('*'==$op){
        return $op1*$op2;
    }
    else if('+'==$op){
        return $op1+$op2;
    }
    else if('-'==$op){
        return $op1-$op2;
    }
    else if('/'==$op){
        return $op1/$op2;
    }
    else
        exit();

}

?>
<h1 class="position-absolute top-50 start-50 translate-middle"><?php echo $op1.' '.$action.' ' .$op2. ' = '.result($action,$op1,$op2) ?></h1>
<?php
end_page();