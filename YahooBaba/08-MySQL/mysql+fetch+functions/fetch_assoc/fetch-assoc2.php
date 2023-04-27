<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");
$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

// $row = mysqli_fetch_assoc($result);

// to print all the values in table, means to access values in the table
while($row = mysqli_fetch_assoc($result))
{
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
// jo hamne $row variable me fetch_assoc se associative array create kiya tha
// usko $row mw store kiya tha, usi line ko, loop ke andar dala he

// jaike ki hame pata he ki fetch_assoc function ek bar me ek hi result deta he. 
// to first time me fetch_assoc values ko fetch/access karke $row me dal dega
// aaur unki values print karega
// seconds time firse fetch_assoc function run hoga and values ko print karega

// fetch_assoc db se sari values fetch to karta hi he, aaur unko associative array bana 
// deta he

// Swapnil Shelke
// Vaishnavi Jadhav
// Pamu Gaikwad
// Kiran Kalunke
// Riya Jadhav
// Aashay Patil



?>