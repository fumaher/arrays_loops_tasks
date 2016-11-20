<?php
$arr = array();
for($i = 0; $i < 20; $i++){
    $arr[] = rand(1, 100);
}
echo "<pre>";
print_r($arr);
echo "Елементи масива больше 0 с парными индексами: <br>";
foreach ($arr as $key => $value) {
    if(($key % 2 == 0) && $value > 0){
        echo "$value | ";
    }
}
echo '<br>';
echo "Елементи масива больше 0 с непарными индексами: <br>";
foreach ($arr as $key => $value) {
    if(($key % 2 != 0) && $value > 0){
        echo "$value | ";
    }
}