<?php   
    $max = [1, 0];
    $min = [99, 0];
    for ($i = 1; $i <= 100; $i++) {
        $new = rand(1, 99);
        if ($new >= $max[0]) {
            $max[0] = $new;
            $max[1] = $i;
        }
        if ($new <= $min[0]) {
            $min[0] = $new;
            $min[1] = $i;
        }
        echo "$i. $new<br>";
    }
    echo "<br>max: ".$max[0]."(num - ".$max[1].")<br>min: ".$min[0]."(num - ".$min[1].")";
?>