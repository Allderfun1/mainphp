<style>
    ul {padding: 0;}
    li {
        display: inline-block;
        padding: 10px 15px;
        background-color: red;
        color: #FFF;
        transition: all 0.2s ease-in-out;
        cursor: pointer;
    }
    li:nth-child(n+2) {border-left: solid black 1px;}
    li:hover {background-color: brown;}
</style>
<?php
    $elements = ["home", "about", "blog", "photos", "contacts"];
    echo "<ul>";
    foreach ($elements as $i) echo "<li>$i</li>";
    echo "</ul>";
?>