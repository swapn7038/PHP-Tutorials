<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Query Failed");
$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_row($result);

// echo "<pre>";
// print_r($row);
// echo "</pre>";

// mysqli_fetch_row() returns an index array
// mysqli_fetch_row() works same as fetch_assoc but returns an index array
// Array
// (
//     [0] => 1
//     [1] => Swapnil 
//     [2] => Shelke
// )

// yaha hamne sirf ek value print ki
// to access multiple values check next file

// ab hum isko access kar sakte, yaha hame key likhane ki jarurat nahi he
// sirf index number likhenge
echo $row[0];
echo $row[1];
echo $row[2];

?>