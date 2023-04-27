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

<?php

// Explanation

// Here we use array_chunk() function. 

// In array chunk function we can pass two parameters, one is array name itself. 
// Second parameter in array_chunk() function is the number chunk we need. 

// No actually we can pass 3 parameters here. 

// 3rd parameter is true or false.

// When we pass true as a parameter, we get continuous values array. 
// Maybe it is helpful in counting total number of elements. 

?>