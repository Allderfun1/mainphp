<style>
    .coll {display: inline-block;}
    .coll:nth-child(n+2) {margin-left: 20px;}
    .coll > span {display: block;}
</style>
<?php
    for ($i = 2; $i <= 10; $i++) {     
        echo "<div class='coll'>";
        for ($j = 1; $j <= 10; $j++) {    
            echo "<span>$i * $j = ".$i * $j."</span>";
        }
        echo "</div>";
    }
?>