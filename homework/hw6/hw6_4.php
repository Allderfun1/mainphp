<style>
    tbody > tr > td {background-color: grey; color: #FFF;}
    tbody > tr:nth-child(1) > td {background-color: red; color: #000;}
</style>
<?php
    $summStart = 300;
    $summEnd = $summStart + $summStart * 0.2;
    $profit = $summEnd - $summStart;
    echo "<table><tbody><tr><td>Year</td><td>Summ start</td><td>Summ end</td><td>Profit</td></tr>";
    for ($i = 1; $i <= 20; $i++) {
        echo "<tr><td>$i</td>";
        echo "<td>$summStart</td>";
        echo "<td>$summEnd</td>";
        echo "<td>$profit</td></tr>";
        $summStart = $summEnd;
        $summEnd = round($summStart + $summStart * 0.2, 2);
        $profit = $summEnd - $summStart;
    }
    echo "</tbody></table>";
?>