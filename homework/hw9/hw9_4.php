<?php 
    $arr = [];
    for ($i = 0; $i < 5; $i++) {
        $arr[] = [rand(1, 100).'.'.rand(11, 1000000), rand(0, 10)];
        echo '<p>'.$arr[$i][0].' rounded to '.$arr[$i][1].': '.round($arr[$i][0], $arr[$i][1]).'</p>';
    }
?>