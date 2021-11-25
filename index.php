<?php
include 'start_end.php';

start_page('OUI');

echo date('d/m/Y',strtotime('2001-03-12')).'<br/>';
echo date(' F d, Y, g:i a ',strtotime('2001-03-12'));
?>

<a href="update.php"></a>


end_page();

