<?php 
$a = [
 'a' => ['b' => 0,'c' => 1 ],
 'b' => ['e' => 2,'o' => ['b' => 3 ] ]
];
// lấy giá trị = 3 mà có key là b từ mảng trên
$value1 = $a['b']['o']['b'];
echo "Giá trị = $value1" .'</br>';

// lấy giá trị = 1 mà có key là c từ mảng trên
$value2 = $a['a']['c'];
echo "Giá trị = $value2" .'</br>';

// lấy thông tin của phần tử có key là a
$info = $a['a'];
echo "phần tử có key 'a'" .'</br>';
var_dump($info);
?>
