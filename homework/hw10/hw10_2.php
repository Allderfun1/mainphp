<?php 
    function renamer($num, $ord) {
        $conv = '';
        if ($ord == 2) {
            switch($num) {
                case 1: $conv = 'ten'; break;
                case 2: $conv = 'twenty'; break;
                case 3: $conv = 'thirty'; break;
                case 4: $conv = 'forty'; break;
                case 5: $conv = 'fifty'; break;
                case 6: $conv = 'sixty'; break;
                case 7: $conv = 'seventy'; break;
                case 8: $conv = 'eighty'; break;
                case 9: $conv = 'ninety'; break;
            } 
        } else switch($num) {
            case 1: $conv = 'one'; break;
            case 2: $conv = 'two'; break;
            case 3: $conv = 'three'; break;
            case 4: $conv = 'four'; break;
            case 5: $conv = 'five'; break;
            case 6: $conv = 'six'; break;
            case 7: $conv = 'seven'; break;
            case 8: $conv = 'eight'; break;
            case 9: $conv = 'nine'; break;
        } 
        if ($ord == 4) $conv .= ' thousand'; 
        if ($ord == 3) $conv .= ' hundred'; 
        if ($num == 0) $conv = ''; 
        return $conv;
    }
    function func($arr) {
        foreach ($arr as $i) echo "$i";
        echo ' - ';
        for ($i = 0; $i < count($arr); $i++) $arr[$i] = renamer($arr[$i], count($arr) - $i);
        foreach ($arr as $i) echo "$i ";
    }
    $Arr = [];
    for ($i = 0; $i < 4; $i++) $Arr[] = rand(0, 1);
    func($Arr);
?>