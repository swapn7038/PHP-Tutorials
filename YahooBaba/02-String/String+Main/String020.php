<?php
// 1. string length and count 
// 2. string count functions 

$str = "Swapnil B Shelke";

$ans = str_word_count($str, 2);

echo "<pre>";
print_r($ans);
echo "</pre>";

// Output

// Array
// (
//     [0] => Swapnil
//     [8] => B
//     [10] => Shelke
// )

?>