<?php 
    $color = [];
    for ($i = 0; $i < 6; $i++) $color[] = rand(0, 15);
    for ($i = 0; $i < 6; $i++) {
        $add = $color[$i];
        switch($color[$i]) {
            case 10: $add = "A"; break;
            case 11: $add = "B"; break;
            case 12: $add = "C"; break;
            case 13: $add = "D"; break;
            case 14: $add = "E"; break;
            case 15: $add = "F"; break; 
        }
        $color[$i] = $add;
    }
    $color = "#".implode($color);
    echo "<div></div>";
?>
<style>
    div {
        width: 100px;
        height: 100px;
        background-color: <?=$color?>;
    }
</style>