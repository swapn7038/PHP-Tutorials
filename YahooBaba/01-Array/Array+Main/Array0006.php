<?php

$names = ["Swapnil" => 10, "Sahil" => 20, "Aashay" => 30, "Aniket" => 40, "Aashitosh" => 50, "Pranali" => 60, "Jagruti" => 70, "Shrushti" => 80, "Suraj" => 90];

echo "<pre>";
print_r(array_change_key_case($names, CASE_LOWER));
echo "</pre>";

// Output
// Array
// (
//     [swapnil] => 10
//     [sahil] => 20
//     [aashay] => 30
//     [aniket] => 40
//     [aashitosh] => 50
//     [pranali] => 60
//     [jagruti] => 70
//     [shrushti] => 80
//     [suraj] => 90
// )


// Explanation
// In array_change_key_case() function, second parameter is  CASE_LOWER or CASE_UPPER

?>