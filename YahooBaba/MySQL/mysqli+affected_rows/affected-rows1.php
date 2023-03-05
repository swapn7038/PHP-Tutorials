<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total rows : " . mysqli_affected_rows($conn);

// Output
// Total rows : 6

?>