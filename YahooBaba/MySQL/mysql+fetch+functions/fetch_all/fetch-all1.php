<?php 

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql =  "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

$data = mysqli_fetch_all($result);

echo "<pre>";
print_r($data);
echo "</pre>";


// fetch_all() sara data fetch karta he, ek bari me hi. Sirf ek row ka result nahi nikalega
// baki ke ek bar ek hi data, row fetch kar pa rahe the

// hame outpur me ek multidimensional associative array milega


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

// by default ye function hame index array hi return karta he
// agar ham chahte he ki ye hame associative arraay return kare
// to hame function ke saath second parameter hame pass karna padega


?>


