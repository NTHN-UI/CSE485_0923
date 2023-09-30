<?php 
function convert_to_lowercase($array)
{
    $result = [];
    foreach ($array as $value) {
        if (is_string($value)) {
            $result[] = strtolower($value);
        } else {
            $result[] = $value;
        }
    }
    return $result;
}
?>