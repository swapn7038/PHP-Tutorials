<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed : " . mysqli_connect_errno());
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

$str = "";

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo $row['first_name'] . " " . $row['last_name'];
    }
}
?>