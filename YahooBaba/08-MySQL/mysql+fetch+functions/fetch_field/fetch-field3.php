<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

// $data = mysqli_fetch_field($result);

// mysqli_fetch_field() 
// ye functino koi data fetch karke nahi layega
// db ke andar jitne bhi columns honge, unki information fetch karke layega

while($field = mysqli_fetch_field($result)){
    
   echo $field->name . " " . $field->max_length . "br";
}

// Output
// id 1 br first_name 10 br last_name 7br

?>