<?php 
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$max_length = strlen($array[0]);
$min_length = strlen($array[0]);
$max_string = $array[0];
$min_string = $array[0];

foreach ($array as $string) {
    
    if (strlen($string) > $max_length) {
        $max_length = strlen($string);
        $max_string = $string;
    }
    if (strlen($string) < $min_length) {
        $min_length = strlen($string);
        $min_string = $string;
    }
}

echo "Chuỗi lớn nhất là $max_string, độ dài = $max_length" .'</br>';

echo "Chuỗi nhỏ nhất là $min_string, độ dài = $min_length" .'</br>';
?>