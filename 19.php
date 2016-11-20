<?php
$today = "Воскресенье";
$week = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
echo "<ul>";
foreach ($week as $value) {
    echo "<li ";
    echo $value == $today ? "style = 'font-weight: bold'" : '';
    echo "> $value</li>";
}
echo "</ul>";