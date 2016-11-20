<?php
$month = "Ноябрь";
$month_of_year = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
    "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
echo "<ul>";
foreach ($month_of_year as $value) {
    echo "<li ";
    echo $value == $month ? "style = 'font-weight: bold'" : '';
    echo "> $value</li>";
}
echo "</ul>";