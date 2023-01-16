<?php
    $n = 30;
    $n % 2 ? $fontsize = $n : $fontsize = $n - 1;
    $numsArr = [];
    for ($i = 0; $i <= $n; $i++) if ($i % 2) $numsArr[] = $i;
    $avg = [0, 0];
    foreach ($numsArr as $i) {
        echo "<span>$i</span> ";
        $avg[0] += $i; 
        $avg[1] += 1;
    }
    echo "<br>AVG = ".$avg[0] / $avg[1]."<br>";
    foreach (array_reverse($numsArr, true) as $i) echo "<span>$i</span> ";
?>
<style>span {color: red; font-family: sans-serif; font-size: <?=$fontsize."px"?>;}</style>