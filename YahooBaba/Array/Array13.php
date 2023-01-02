<?php

// array_merge() => Use with Index or Associative array
// array_merge_recursive() => Multidimensional Associative Array
// array_combine() => Index Array 

$fruit = [ 'a' => "orange", 'b' => "banana", 'c' =>"grapes"];

$veggie = [ 'd' => "carrot", 'e' => "pea", 55, 23];


// array_merge() used 
// $new_array = array_merge($fruit, $veggie);

// $new_array = $fruit + $veggie;

$new_array = array_merge_recursive($fruit, $veggie);

echo "<pre>";
print_r($new_array);
echo "</pre>";

?>