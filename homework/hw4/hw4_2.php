
<style>
    .block1 {
        width: 100px;
        height: 100px;
        background-color: red;
        border-radius: 15px;
    }
</style>
<?php 
    function objectMaker($tag, $class) {
        echo "<$tag class='$class'></$tag>";
    }
    objectMaker("div", "block1");
?>