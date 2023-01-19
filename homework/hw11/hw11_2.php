<?php 
    function func($num, $numDeg) {return "$num^$numDeg = ".$num ** $numDeg;}
    echo func(rand(0, 10), rand(0, 10));
?>