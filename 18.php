<?php
$week = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
echo "<ul>";
foreach ($week as $value) {
    echo "<li ";
    echo ($value == "Суббота" || $value == "Воскресенье") ? "style = 'font-weight: bold'" : '';
    echo "> $value</li>";
}
echo "</ul>";