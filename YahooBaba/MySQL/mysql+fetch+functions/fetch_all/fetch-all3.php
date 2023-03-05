<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

// seconda parameter for numeric value
// bydefault hame index array milta he
$data = mysqli_fetch_all($result, MYSQLI_NUM);

echo "<pre>";
print_r($data);
echo "</pre>";

// Output
// Array
// (
//     [0] => Array
//         (
//             [0] => 1
//             [1] => Swapnil 
//             [2] => Shelke
//         )

//     [1] => Array
//         (
//             [0] => 2
//             [1] => Vaishnavi 
//             [2] => Jadhav
//         )

//     [2] => Array
//         (
//             [0] => 3
//             [1] => Pamu
//             [2] => Gaikwad
//         )

//     [3] => Array
//         (
//             [0] => 4
//             [1] => Kiran 
//             [2] => Kalunke
//         )

//     [4] => Array
//         (
//             [0] => 5
//             [1] => Riya 
//             [2] => Jadhav
//         )

//     [5] => Array
//         (
//             [0] => 6
//             [1] => Aashay
//             [2] => Patil
//         )

// )


?>