<?php 
$arrs1 = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];
function convertToUpperCase($arr) {
    $result = array_map(function($item) {
        if (is_string($item)) {
            return strtoupper($item);
        }
        return $item;
    }, $arr);

    return $result;
}
$result1 = convertToUpperCase($arrs1);
$result2 = convertToUpperCase($arrs2);

print_r($result1);
echo '</br>';
print_r($result2);

?>