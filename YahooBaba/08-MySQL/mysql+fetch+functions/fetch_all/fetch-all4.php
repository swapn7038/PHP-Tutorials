
<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

// seconda parameter for numeric value
// bydefault hame index array milta he
$data = mysqli_fetch_all($result, MYSQLI_NUM);


// ab isko print kaise kare
// => using forEach

foreach($data as $values) {
    echo $values[0] . $values[1] . $values[2] . "<br>";
}

// Output

// 1Swapnil Shelke
// 2Vaishnavi Jadhav
// 3PamuGaikwad
// 4Kiran Kalunke
// 5Riya Jadhav
// 6AashayPatil

?>
