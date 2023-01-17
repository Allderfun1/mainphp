<?php 
    $arr = ["border" => "10px", "coord" => ["30px","100px"], "color" => "red"];
?>
<style>
    .figure {
        position: absolute;
        top: <?=$arr["coord"][0]?>;
        left: <?=$arr["coord"][1]?>;
        width: 100px;
        height: 100px;
        background-color: <?=$arr["color"]?>;
        border-radius: <?=$arr["border"]?>;
    }
</style>
<div class='figure'></div>