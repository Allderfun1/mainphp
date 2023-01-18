<?php 
    $arr1 = ['name' => 'Alex', 'company' => 'Apple', 'position' => 'developer'];
    $arr2 = ['name' => 'John', 'company' => 'Microsoft', 'position' => 'director'];
    $arr4 = ['name' => 'Olga', 'company' => 'Amazon', 'position' => 'developer'];
    $arr3 = ['name' => 'Jack', 'company' => 'Microsoft', 'position' => 'designer'];
    $totalArr = [$arr1, $arr2, $arr3, $arr4];
    $companies = [];
    foreach ($totalArr as $i) {
        $ch1 = 0;
        foreach ($companies as $j) if ($i['company'] == $j) $ch1++;
        if (!$ch1) $companies[] = $i['company'];
    }
    echo '<ul>';
    foreach ($companies as $i) {
        echo "<li>$i<ul>";
        foreach ($totalArr as $j) if ($i == $j['company']) echo '<li>'.$j['name'].'</li>';
        echo '</ul></li>';
    }
    echo '</ul>';
?>