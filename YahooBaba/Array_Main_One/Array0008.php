<?php
$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

echo "<pre>";
print_r(array_chunk($cars, 3));
echo "</pre>";


// Output
// Array
// (
//     [0] => Array
//         (
//             [0] => Volvo
//             [1] => BMW
//             [2] => Toyota
//         )

//     [1] => Array
//         (
//             [0] => Honda
//             [1] => Mercedes
//             [2] => Opel
//         )

// )
?>