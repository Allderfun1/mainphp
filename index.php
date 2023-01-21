<?php 
    echo "<div class='blocks'>";
    for ($i = 0; $i < 6; $i++) echo "<div class='block'></div>";
    echo "</div>";
?>
<style>
    .blocks {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        width: 1440px;
        max-width: 100%;
        margin: auto;
    }
    .blocks > div {
        width: calc(100% / 3 - 40px / 3);
        height: 300px;
        background-color: gray;
        border-radius: 10px;
    }
    .blocks > div:nth-child(n+4) {margin-top: 20px;}
</style>