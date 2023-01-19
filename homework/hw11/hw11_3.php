<?php 
    function func($num1, $num2) {
        $num1 = [$num1, $num2]; 
        $num2 = $num1[0]; 
        $num1 = $num1[1];
        return ['first' => $num1, 'second' => $num2];
    }
    $num1 = rand(0, 10);
    $num2 = rand(0, 10);
    echo "first: $num1; second: $num2;<br>first: ".func($num1, $num2)['first']."; second: ".func($num1, $num2)['second'].";";
?>