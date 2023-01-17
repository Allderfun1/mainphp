<?php 
    $header = ["height" => "100px", "bColor" => "red", "color" => "#FFF"];
    $content = ["height" => "600px", "bColor" => "yellow", "color" => "#000"];
    $footer = ["height" => "150px", "bColor" => "brown", "color" => "#FFF"];
    $blocks = ["header" => $header, "content" => $content, "footer" => $footer];
?>
<style>
    * {width: 100%;}
    body {margin: 0;}
    header {
        height: <?=$blocks["header"]["height"]?>;
        background-color: <?=$blocks["header"]["bColor"]?>;
        color: <?=$blocks["header"]["color"]?>;
    }
    .content {
        height: <?=$blocks["content"]["height"]?>;
        background-color: <?=$blocks["content"]["bColor"]?>;
        color: <?=$blocks["content"]["color"]?>;
    }
    footer {
        height: <?=$blocks["footer"]["height"]?>;
        background-color: <?=$blocks["footer"]["bColor"]?>;
        color: <?=$blocks["footer"]["color"]?>;
    }
</style>
<header><?=array_keys($blocks)[0]?></header>
<div class="content"><?=array_keys($blocks)[1]?></div>
<footer><?=array_keys($blocks)[2]?></footer>