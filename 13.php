<?php
echo '<table border="1">';
for ($tr=1; $tr<=10; $tr++){
    echo '<tr>';
    for ($td=1; $td<=10; $td++){
        echo '<td>'. $tr*$td .'</td>';
    }
    echo '</tr>';
}
echo '</table>';