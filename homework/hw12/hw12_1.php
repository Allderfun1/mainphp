<?php 
    function funcA($str, $s) {
        $ch1 = 0;
        foreach (str_split($str) as $i) if ($i == $s) $ch1++;
        return $ch1;
    }
    function funcB($str, $s, $s2) {
        $strArr = str_split($str);
        for ($i = 0; $i < count($strArr); $i++) if ($strArr[$i] == $s) $strArr[$i] = $s2;
        return implode($strArr);
    }
    function funcC($str) {
        return implode(array_reverse(str_split($str)));
    }
    function funcD($str) {
        return explode(' ', $str);
    }
    function funcE($word) {
        $ru = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя';
        $en = 'abcdefghijklmnopqrstuvwxyz';
        $chRu = 0;
        $chEn = 0;
        foreach (str_split($ru) as $i) foreach (str_split($word) as $j) if ($j == $i) $chRu++;
        foreach (str_split($en) as $i) foreach (str_split($word) as $j) if ($j == $i) $chEn++;
        $chRu > $chEn ? $total = 'Cyrillic' : $total = 'Latin';
        return $total;
    }
?>