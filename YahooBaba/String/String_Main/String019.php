<?php
// 1. string length and count 
// 2. string count functions 

$str = "Swapnil B Shelke";

// this is wrong way 
$ans = str_word_count($str, 1);

//use print_r() to print array 

echo "<pre>";
print_r($ans);
echo "</pre>";

// Output

// Array
// (
//     [0] => Swapnil
//     [1] => B
//     [2] => Shelke
// )

?>