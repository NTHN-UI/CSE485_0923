
<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

function Tong($arrs){
    $tong = array_sum($arrs);
    $result = implode(' + ', $arrs);
echo 'Tổng các phần tử = ' . $result . " = " . $tong;
}

function Hieu($arrs){
    $hieu = $arrs[0];
    for($i = 1 ;$i < count($arrs);$i++){
        $hieu -= $arrs[$i];
    }
    $result = implode(' - ', $arrs);
    echo 'Hiệu các phần tử = ' . $result . " = " . $hieu;

}
function Tich($arrs){
    $tich = 1;
    for($i = 0 ;$i < count($arrs);$i++){
        $tich *= $arrs[$i]; 
    }
    $result = implode(' * ', $arrs);
    echo 'Tích các phần tử = ' . $result . " = " . $tich;
}
function Thuong($arrs){
    $thuong = $arrs[0];
    for($i = 1 ;$i < count($arrs);$i++){
        if($arrs[$i] !== 0){
            $thuong /= $arrs[$i]; 
        }
        else{
            echo 'Lỗi';
            return;
        }
    }
    $result = implode(' / ', $arrs);
    echo 'Thuong các phần tử = ' . $result . " = " . $thuong;
}

Tong($arrs);
echo '<br>';
Hieu($arrs);
echo '<br>';
Tich($arrs);
echo '<br>';
Thuong($arrs);

?>

