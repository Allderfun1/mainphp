<?php 
    $num = 347689;
    echo "<h1 style='color: red;'>$num</h1><h1 style='color: green;'>".implode(array_reverse(str_split($num)))."</h1>";
?>