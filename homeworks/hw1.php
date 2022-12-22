<h3>Задание 1</h3>
<?php 
    $uname = "Александр";
    print "Hello! My name is '$uname'";
?>
<br><br>
<h3>Задание 2</h3>
<?php 
    $uname = "Александр";
    $uage = 24;
    print "Hello! My name is '$uname'<br>I'm Age $uage";
?>
<br><br>
<h3>Задание 3</h3>
<?php 
    $a = 36;
    $b = 64;
    $rez = $a + $b;
    print "'$a' + '$b' = '$rez'";
?>
<br><br>
<h3>Задание 4</h3>
<?php 
    $a = 36;
    $b = 64;
    print "a = $a<br>b = $b";
    $a = [$a,$b];
    $b = $a[0];
    $a = $a[1];
    print "<br>a = $a<br>b = $b";
?>
<br><br>
<h3>Задание 5</h3>
<?php//не понял задание?>
<br><br>
<h3>Задание 6</h3>
<?php
    $tag = "div";
    $background_color = "blue";
    $color = "red";
    $width = 150;
    $height = 150;
    $text = "Hello";
?>
<<?=$tag?> style="width: <?=$width?>px; height: <?=$height?>px; background-color: <?=$background_color?>; color: <?=$color?>;"><?=$text?></<?=$tag?>>