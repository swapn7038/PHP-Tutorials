<?php

// db connection
$conn = mysqli_connect("localhost", "root", "", "test") or die("Query Failed");
// localhost -> server name
// text -> db name

// sql command
$sql = "SELECT * FROM students";

//
$result = mysqli_query($conn, $sql) or die("Query Failed");

//  function called and store output in $result variable
// $row = mysqli_fetch_row($result);




while($row = mysqli_fetch_row($result)){
    echo $row[0] ;   
    echo $row[1] ;   
    echo $row[2] . "<br>";   
}

// Output
// 1Swapnil Shelke
// 2Vaishnavi Jadhav
// 3PamuGaikwad
// 4Kiran Kalunke
// 5Riya Jadhav
// 6AashayPatil

?>