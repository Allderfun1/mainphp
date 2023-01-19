<?php 
    function func($arr) {
        for ($i = 0; $i < count($arr); $i++)  if ($arr[$i] < 0) $arr[$i] = '<span style="color: red;">'.$arr[$i].'</span>';
        foreach ($arr as $i) echo "$i ";
    }
    $Arr = [];
    for ($i = 0; $i < 9; $i++) $Arr[] = rand(-25, 25);
    func($Arr);
?>