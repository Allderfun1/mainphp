<?php 
    $arr = [];
    for ($i = 0; $i < 5; $i++) {
        $arrAdder = [];
        for ($j = 0; $j < 5; $j++) $arrAdder[] = rand(10, 99);
        $arr[] = $arrAdder;
    }
    for ($i = 0; $i < count($arr); $i++) for ($j = 0; $j < count($arr[$i]); $j++) if ($arr[$i][$j] == min($arr[$i])) $arr[$i][$j] = '<span style="color: red;">'.$arr[$i][$j].'</span>';
    foreach ($arr as $j) {
        echo '<p>';
        foreach ($j as $k) echo "$k ";
        echo '</p>';
    }
?>