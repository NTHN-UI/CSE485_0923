<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0]; 
$numbers = [];
foreach ($array as $value) {
    if ($value >= 100 && $value <= 200 && $value % 5 === 0) {
        $numbers[] = $value;
    }
}
echo "Các số từ 100 đến 200 và chia hết cho 5:" .'</br>';
foreach ($numbers as $number) {
    echo $number . '</br>';
}
?>