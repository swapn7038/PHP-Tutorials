<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

// we added where caluse here
$sql = "SELECT * FROM students where last_name = 'patil' ";

$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total rows : " . mysqli_affected_rows($conn);

// Output
// 1

?>