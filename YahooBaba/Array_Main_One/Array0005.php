<?php

$names = ["Swapnil" => 10, "Sahil" => 20, "Aashay" => 30, "Aniket" => 40, "Aashitosh" => 50, "Pranali" => 60, "Jagruti" => 70, "Shrushti" => 80, "Suraj" => 90];

echo "<pre>";
print_r(array_change_key_case($names, CASE_UPPER));
echo "</pre>";

// Output
// Array
// (
//     [SWAPNIL] => 10
//     [SAHIL] => 20
//     [AASHAY] => 30
//     [ANIKET] => 40
//     [AASHITOSH] => 50
//     [PRANALI] => 60
//     [JAGRUTI] => 70
//     [SHRUSHTI] => 80
//     [SURAJ] => 90
// )
?>