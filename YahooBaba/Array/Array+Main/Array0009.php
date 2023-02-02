<?php

$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

echo "<pre>";

print_r(array_chunk($cars, 2));

echo "</pre>";

// Output
// Array
// (
//     [0] => Array
//         (
//             [0] => Volvo
//             [1] => BMW
//         )

//     [1] => Array
//         (
//             [0] => Toyota
//             [1] => Honda
//         )

//     [2] => Array
//         (
//             [0] => Mercedes
//             [1] => Opel
//         )

// )
?>