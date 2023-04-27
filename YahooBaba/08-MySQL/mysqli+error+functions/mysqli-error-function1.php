<?php

$conn = mysqli_connect("localhost", "root", "", "tes") or die("Connection failed : " . mysqli_connect_error());
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

$str = "";
if($row = mysqli_fetch_assoc($result)){
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}

?>