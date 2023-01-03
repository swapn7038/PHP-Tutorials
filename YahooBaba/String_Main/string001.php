<?php
// string str_split() 
// string chunk_split()

$str = "Swapnil Shelke";

$array = str_split($str);

echo "<pre>";

print_r($array);

echo "</pre>";

// output
// Array
// (
//     [0] => S
//     [1] => w
//     [2] => a
//     [3] => p
//     [4] => n
//     [5] => i
//     [6] => l
//     [7] =>  
//     [8] => S
//     [9] => h
//     [10] => e
//     [11] => l
//     [12] => k
//     [13] => e
// )

?>