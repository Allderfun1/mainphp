<?php 
    $arr = [];
    for ($i = 0; $i < 10; $i++) $arr[] = rand(1, 9);
    echo implode(", ", $arr)."<br>Больше предыдущих: ";
    for ($i = 1; $i < 10; $i++) if ($arr[$i] > $arr[$i - 1]) echo "$arr[$i] ";
    $summ = 0;
    foreach ($arr as $i) $summ += $i;
    echo "<br>Сумма: $summ";
    echo "<br>AGV: ".$summ / 10;
?>