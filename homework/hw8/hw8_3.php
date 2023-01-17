<?php 
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        switch(rand(1, 4)) {
            case 1: $tp = "text"; break;
            case 2: $tp = "checkbox"; break;
            case 3: $tp = "radio"; break;
            case 4: $tp = "button"; break;
        }
        $arr[] = ["type" => $tp, "value" => "Значение"];
    }
    for ($i = 0; $i < 10; $i++) echo "<input type='".$arr[$i]["type"]."' value='".$arr[$i]["value"]."'><br>"; 
?>