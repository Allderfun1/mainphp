<style>
    .strng {display: flex;}
    .cell {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
    }
    .cell > div {font-size: 35px;}
</style>
<?php
    function generator($y2, $x2, $figureName) {
        switch($figureName) {
            case "король": $figure = "&#9812;"; break;
            case "королева": $figure = "&#9813;"; break;
            case "ладья": $figure = "&#9814;"; break;
            case "слон": $figure = "&#9815;"; break;
            case "конь": $figure = "&#9816;"; break;
            case "пешка": $figure = "&#9817;"; break;
        }
        $y = 0;
        for ($i = 0; $i < 8; $i++) {
            $y++; $x = 0;
            echo "<div class='strng'>";
            $i % 2 ? $ch1 = false : $ch1 = true;
            for ($j = 0; $j < 8; $j++) {
                $x++;
                if ($ch1) {
                    echo "<div class='cell' style='background-color: #FFF;'>";
                    if ($y == $y2 && $x == $x2) {echo "<div style='color: #000;'>$figure</div>";}
                    echo "</div>"; $ch1 = false;
                } else {
                    echo "<div class='cell' style='background-color: #000;'>";
                    if ($y == $y2 && $x == $x2) {echo "<div style='color: #FFF;'>$figure</div>";}
                    echo "</div>"; $ch1 = true;
                }
            }
            echo "</div>";
        }
    }
    generator(5, 6, "конь");
?>