<?php
$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel", "Volvo","BMW","Toyota","Honda","Mercedes","Opel", "Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

echo "<pre>";
print_r(array_chunk($cars, 4, true));
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
//             [4] => Mercedes
//             [5] => Opel
//             [6] => Volvo
//             [7] => BMW
//         )

//     [2] => Array
//         (
//             [8] => Toyota
//             [9] => Honda
//             [10] => Mercedes
//             [11] => Opel
//         )

//     [3] => Array
//         (
//             [12] => Volvo
//             [13] => BMW
//             [14] => Toyota
//             [15] => Honda
//         )

//     [4] => Array
//         (
//             [16] => Mercedes
//             [17] => Opel
//         )

// )
?>