<?php
$x = $_GET['x'];
echo "Число пользователя - " . $x;

$variable1 = 1;
$variable2 = 1;
while (true) {
    if ($variable1 > $x) {
        echo "<br>Задуманное число НЕ входит в числовой ряд Фибоначчи.";
        break;
    } else if ($variable1 == $x) {
        echo "<br>Задуманное число входит в числовой ряд Фибоначчи.";
        break;
    } else {
        $variable3 = $variable1;
        $variable1 = $variable1 + $variable2;
        $variable2 = $variable3;
        //echo "<br>3яя ветка,$variable1,$variable2,$variable3";

    }
}
