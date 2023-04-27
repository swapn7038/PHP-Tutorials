<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

$data = mysqli_fetch_field($result);

echo "<pre>";
print_r($data);
echo "</pre>";

// mysqli_fetch_field() 
// ye functino koi data fetch karke nahi layega
// db ke andar jitne bhi columns honge, unki information fetch karke layega

// output
// stdClass Object
// (
//     [name] => id
//     [orgname] => id
//     [table] => students
//     [orgtable] => students
//     [def] => 
//     [db] => test
//     [catalog] => def
//     [max_length] => 1
//     [length] => 11
//     [charsetnr] => 63
//     [flags] => 49667
//     [type] => 3
//     [decimals] => 0
// )

// agar sare columns ki values dekhne he to while loop ka use kar sakte ho

?>