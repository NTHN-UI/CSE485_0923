<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
  ];
  
  // Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng trên
  $firstElement = reset($numbers);
  $lastElement = end($numbers);
  
  echo "firstElement: " . $firstElement . '</br>';
  echo "lastElement: " . $lastElement . '</br>';
  
  // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị từ mảng trên
  $minValue = min($numbers);
  $maxValue = max($numbers);
  $arraySum = array_sum($numbers);
  
  echo "Min: " . $minValue . '</br>';
  echo "Max: " . $maxValue . '</br>';
  echo "Sum: " . $arraySum . '</br>';
  
  // Sắp xếp mảng theo chiều tăng, giảm các giá trị
  asort($numbers);
  print_r($numbers);
  echo '</br>';
  
  arsort($numbers);
  print_r($numbers);
  echo '</br>';
  // Sắp xếp mảng theo chiều tăng, giảm các key
  ksort($numbers);
  print_r($numbers);
  echo '</br>';
  krsort($numbers);
  print_r($numbers);
 ?>