<style>
    div {
        position: absolute;
        width: 20px;
        height: 20px;
        background-color: blue;
    }
</style>
<?php 
    function coord($cycles) {
        echo '<div style="top: '.rand(0, 200).'px; left: '.rand(0, 200).'px;"></div>';
        if ($cycles > 1) coord($cycles - 1);
    }
    coord(10);
?>