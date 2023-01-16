<?php 
    function math($a, $b, $oper) {
        if (gettype($a) == "integer" && gettype($b) == "integer" && ($oper == "+" || $oper == "-" || $oper == "*" || $oper == "/")) {
            switch($oper) {
                case "+": echo $a + $b; break;
                case "-": echo $a - $b; break;
                case "*": echo $a * $b; break;
                case "/": 
                    if ($b) echo $a / $b;
                    else echo "Input error"; 
                    break;
            }
        } else echo "Input error";
    }
    math(7, 3, "*");
?>