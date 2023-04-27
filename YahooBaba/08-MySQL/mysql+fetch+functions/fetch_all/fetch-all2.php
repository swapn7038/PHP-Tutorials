<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

// seconda parameter for associative array
// bydefault hame index array milta he
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<pre>";
print_r($data);
echo "</pre>";

// Output
// Array
// (
//     [0] => Array
//         (
//             [id] => 1
//             [first_name] => Swapnil 
//             [last_name] => Shelke
//         )

//     [1] => Array
//         (
//             [id] => 2
//             [first_name] => Vaishnavi 
//             [last_name] => Jadhav
//         )

//     [2] => Array
//         (
//             [id] => 3
//             [first_name] => Pamu
//             [last_name] => Gaikwad
//         )

//     [3] => Array
//         (
//             [id] => 4
//             [first_name] => Kiran 
//             [last_name] => Kalunke
//         )

//     [4] => Array
//         (
//             [id] => 5
//             [first_name] => Riya 
//             [last_name] => Jadhav
//         )

//     [5] => Array
//         (
//             [id] => 6
//             [first_name] => Aashay
//             [last_name] => Patil
//         )

// )

?>