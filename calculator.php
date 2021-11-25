<?php
include 'start_end.php';
start_page('calculator');
?>
<?php
$operateurs = '+-*/';
?>

    <h2 >calculator</h2>
    <form action="calcul.php" method="GET">
        <label>

            <input type="number" name="op1"><br>
            <input type="number" name="op2"><br>
            <?php
            for ($cpt = 0; $cpt < 4; ++$cpt) {
                echo '<input ';
                if ($cpt == 0) {
                    echo 'checked="checked"';
                }
                echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/>' . "\n";
            }
            ?>

        </label>

    </form>
<?php

?>

<?php
end_page();