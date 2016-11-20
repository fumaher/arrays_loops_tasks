<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$a = [2,3,4];
foreach($arr as $numb){
    if(in_array($numb, $a))
        exit("Есть!");
}
echo "Нет!";
?>