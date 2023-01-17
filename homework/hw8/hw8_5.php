<style>
    .mainBox {
        display: inline-block;
        vertical-align: top;
        padding: 20px;
    }
    .mainBox > h2 {margin: 0;}
    .mainBox > ul {padding: 0;}
    .mainBox > ul > li {list-style-type: none;}
    .mainBox:nth-child(1) {background-color: lightblue;}
    .mainBox:nth-child(2) {background-color: green;}
    .mainBox:nth-child(3) {background-color: red;}
    .mainBox:nth-child(4) {background-color: yellow;}
    .mainBox:nth-child(5) {background-color: pink;}
    .mainBox:nth-child(6) {background-color: #000; color: #FFF;}
</style>
<?php 
    $cpu = ["name" => "AMD ryzen 5", "socket" => "am4", "ghz" => "3600ghz", "core" => "6"];
    $mBoard = ["name" => "ASUS rog strix", "socket" => "am4", "storageType" => "ddr4"];
    $ram = ["name" => "HyperX", "storageType" => "ddr4", "storage" => "16gb"];
    $hd = ["name" => "SeaGate", "type" => "HDD", "size" => "1tb"];
    $psu = ["name" => "deepcool", "power" => "1000w"];
    $pc = ["CPU" => $cpu, "Motherboard" => $mBoard, "RAM" => $ram, "HD" => $hd, "PSU" => $psu];
    $ch1 = 0;
    foreach ($pc as $i) {
        echo "<div class='mainBox'>";
        echo "<h2>".$i['name']."</h2>";
        echo "<ul>";
        $ch2 = 0;
        foreach ($i as $j) {
            if ($ch2 != 0) echo "<li><b>".array_keys($i)[$ch2].": </b>$j</li>";
            $ch2++;
        }
        echo "</ul>";
        echo "</div>";
        $ch1++;
    }
    echo "<div class='mainBox'>";
    echo "<h2>Result</h2>";
    echo "<ul>";
    $ch1 = 0;
    foreach ($pc as $i) {
        echo "<li><b>".array_keys($pc)[$ch1].": </b>".$i['name']."</li>";
        $ch1++;
    }
    echo "</ul>";
    echo "</div>";
?>