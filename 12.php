<?php
$a = 1000;
$num = 0;
while ($a > 50) {
    $num++;
    $a /= 2;
}
echo "количество итераций " .$num;