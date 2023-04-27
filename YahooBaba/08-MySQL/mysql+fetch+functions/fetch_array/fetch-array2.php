<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

// $data = mysqli_fetch_array($result); 

// agar yaha ham sirf associative array nikalna chahte he, to above statement
// me second parameter dena padta he
// jisme ham ye bata te he ki hame kis form me data chaiye
// basically 3 type ki defined valus he
// first value is MYSQLI_ASSOC

// agar hamne MYSQLI_ASSOC pass kiya to wo hame sirf associative array hi return karega

$data = mysqli_fetch_array($result, MYSQLI_ASSOC); 

// ab iske bad ham data ko $data variable se access kr sakte
// kyunki hamne mysqli_fetch_array() ko uske me store kr diya

// echo $data['first_name'] . ['last_name']; // => this is wrong , we cannot print data like this

print_r($data);
// Output
// Array ( [id] => 1 [first_name] => Swapnil [last_name] => Shelke )

echo $data['first_name'];
// Output
// Swapnil

// Agar ham yaha sirf numeric value chahte ho, matlab index array 
// to MYSQLI_ASSOC ki jagah pe sirf MYSQLI_NUM pass kardo

$data2 = mysqli_fetch_array($result, MYSQLI_NUM);

echo "<pre>";
print_r($data2);
echo "</pre>";

// Output
// Array
// (
//     [0] => 2
//     [1] => Vaishnavi 
//     [2] => Jadhav
// )


// third parameter jo he fetch_array() function me wo he, MYSQLI_BOTH
// MYSQLI_BOTH ye iski default value he, 

?>