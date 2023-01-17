<?php 
    $num = 5493256;
    $numArr = str_split($num);
    $max = 0;
    $min = 9;
    $summ = 0;
    foreach ($numArr as $i) {
        if ($i >= $max) $max = $i;
        if ($i <= $min) $min = $i;
        $summ += $i;
    }
    echo "<b>$num</b>";
    echo "<br><b>".implode(", ", $numArr)."</b>";
    echo "<br>Кол-во чисел: <b>".count($numArr)."</b>";
    echo "<br>Максимальное число: <b>".$max."</b>";
    echo "<br>Минимальное число: <b>".$min."</b>";
    echo "<br>Сумма чисел: <b>".$summ."</b>";
    echo "<br>AVG: <b>".round($summ / count($numArr), 2)."</b>";
?>