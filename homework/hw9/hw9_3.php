<?php 
    $arr = [1];
    $minNum = 1;
    $maxNum = 91;
    for ($i = 0; $i < 9; $i++) {
        $num = rand($minNum, $maxNum);
        $arr[] = $num;
        $minNum = $num + 1;
        if ($num == $maxNum) $maxNum += 2;
        echo "($minNum, $maxNum, $num)<br>";
    }
    foreach ($arr as $i) echo "$i ";
?>