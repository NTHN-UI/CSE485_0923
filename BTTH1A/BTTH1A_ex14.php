<?php 
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
     'giá trị 1', 'giá trị 2'
];

$result = array_combine(array_column($array1, 0), $array2);


foreach ($array1 as $key => $values) {
    $result[$values[0]] = array_merge([$result[$values[0]]], $values);
}
$result = array_values($result);


var_dump($result);
?>