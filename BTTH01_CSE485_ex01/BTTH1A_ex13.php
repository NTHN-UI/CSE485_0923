<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
// Tính toán giá trị trung bình của mảng trên
$tong_so_phan_tu = array_sum($numbers);
$so_phan_tu = count($numbers);
$trung_binh = $tong_so_phan_tu / $so_phan_tu;

echo "Giá trị trung bình của mảng: $trung_binh";
echo '</br>';
//Liệt kê các số có giá trị lớn hơn giá trị trung bình đó 
$numbers_lon_hon_trung_binh = [];

for ($i = 0; $i < count($numbers); $i++) {
  if ($numbers[$i] > $trung_binh) {
    $numbers_lon_hon_trung_binh[] = $numbers[$i];
  }
}
echo "Các số có giá trị lớn hơn giá trị trung bình: " . implode(", ", $numbers_lon_hon_trung_binh);
echo '</br>';

//Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó 
$numbers_nho_hon_hoac_bang_trung_binh = [];

for ($i = 0; $i < count($numbers); $i++) {
  if ($numbers[$i] <= $trung_binh) {
    $numbers_nho_hon_hoac_bang_trung_binh[] = $numbers[$i];
  }
}

echo "Các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình: " . implode(", ", $numbers_nho_hon_hoac_bang_trung_binh);
 ?>