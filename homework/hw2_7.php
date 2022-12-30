<h3>Задание 5</h3>
<?php 
    function f1($x, $y, $color) {
        echo "x = $x<br>y = $y<br>color - $color<br>";
        if (true) {echo "<div style='position: absolute; left: $x; top: $y; width: 50px; height: 50px; background-color: $color;'></div>";}   
    }
    f1(100, 150, 'green');
    echo "<br><br>";
?>