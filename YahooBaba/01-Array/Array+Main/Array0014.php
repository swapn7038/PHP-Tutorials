<?php
$array = ["a", "b", "c", "d", "e", ];


echo "<pre>";

print_r(array_count_values($array));

echo "</pre>";

// Output
// Array ( [a] => 1 [b] => 1 [c] => 1 [d] => 1 [e] => 1 )
?>

<?php

// Explanation 

// We use array_count_values()

// array_count_values() function to count the
// same number of element is how many times repeated. 

// For example in above array, we have elements like a, b, and so on....

// If we took a two time, we will get 2 value in front of an array.

?>