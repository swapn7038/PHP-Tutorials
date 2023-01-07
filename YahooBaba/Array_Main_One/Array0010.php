<?php
$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel", "Volvo","BMW","Toyota","Honda","Mercedes","Opel", "Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

echo "<pre>";
print_r(array_chunk($cars, 4));
echo "</pre>";


// Output
// Array
// (
//     [0] => Array
//         (
//             [0] => Volvo
//             [1] => BMW
//             [2] => Toyota
//             [3] => Honda
//         )

//     [1] => Array
//         (
//             [0] => Mercedes
//             [1] => Opel
//             [2] => Volvo
//             [3] => BMW
//         )

//     [2] => Array
//         (
//             [0] => Toyota
//             [1] => Honda
//             [2] => Mercedes
//             [3] => Opel
//         )

//     [3] => Array
//         (
//             [0] => Volvo
//             [1] => BMW
//             [2] => Toyota
//             [3] => Honda
//         )

//     [4] => Array
//         (
//             [0] => Mercedes
//             [1] => Opel
//         )

// )
?>