<?php 
    $arr1 = ['name' => 'Alex', 'company' => 'Apple', 'position' => 'developer'];
    $arr2 = ['name' => 'Olga', 'company' => 'Microsoft', 'position' => 'developer'];
    $arr3 = ['name' => 'Jack', 'company' => 'Microsoft', 'position' => 'developer'];
    $totalArr = [$arr1, $arr2, $arr3];
    foreach ($totalArr as $i) echo $i['name']." is working in ".$i['company']." as: ".$i['position']."<br>";
?>