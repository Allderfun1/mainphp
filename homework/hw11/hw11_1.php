<?php 
    function func($count, $min, $max) {
        if ($min > $max) {$min = [$min, $max]; $max = $min[0]; $min = $min[1];}
        echo "count: $count<br>min: $min<br>max: $max<br>";
        $arr = [];
        for ($i = 0; $i < $count; $i++) $arr[] = rand($min, $max);
        return $arr;
    }
    $Arr = func(rand(1, 10), rand(1, 10), rand(1, 10));
    echo 'output: ';
    foreach ($Arr as $i) echo "$i ";
?>