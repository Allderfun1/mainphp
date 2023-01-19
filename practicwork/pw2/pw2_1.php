<?php 
    function funcA($a, $b = 'undef') {
        $summ = 0;
        if ($b == 'undef') {
            foreach ($a as $i) $summ += $i;
            $summ = implode(" * ", $a)." = $summ";
        }
        else $summ = "$a + $b = ".($a + $b);
        return $summ;
    }
    function funcB($a, $b) {
        $out = "$a - $b = ".($a - $b);
        return $out;
    }
    function funcC($a, $b = 'undef') {
        $res = 1;
        if ($b == 'undef') {
            foreach ($a as $i) $res *= $i;
            $res = implode(" * ", $a)." = $res";
        }
        else $res = "$a * $b = ".($a * $b);
        return $res;
    }
    function funcD($a, $b) {
        $b != 0 ? $a = "$a / $b = ".$a / $b : $a = "$a / $b = NULL";
        return $a;
    }
    function funcE($a, $b) {
        $out = "rand($a, $b) = ".rand($a, $b);
        return $out;
    }
?>