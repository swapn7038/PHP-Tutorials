<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "UPDATE students SET last_name = 'Shelke'  WHERE  last_name = 'patil' ";
// above query will change patil to shelke
$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total rows : " . mysqli_affected_rows($conn);

// Output
// 

?>