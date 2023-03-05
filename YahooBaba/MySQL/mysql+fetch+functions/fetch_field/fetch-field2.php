<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

// $data = mysqli_fetch_field($result);

// mysqli_fetch_field() 
// ye functino koi data fetch karke nahi layega
// db ke andar jitne bhi columns honge, unki information fetch karke layega

while($field = mysqli_fetch_field($result)){
    echo "<pre>";
   print_r($field);
    echo "</pre>";
}

// Output
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
// stdClass Object
// (
//     [name] => first_name
//     [orgname] => first_name
//     [table] => students
//     [orgtable] => students
//     [def] => 
//     [db] => test
//     [catalog] => def
//     [max_length] => 10
//     [length] => 400
//     [charsetnr] => 45
//     [flags] => 4097
//     [type] => 253
//     [decimals] => 0
// )
// stdClass Object
// (
//     [name] => last_name
//     [orgname] => last_name
//     [table] => students
//     [orgtable] => students
//     [def] => 
//     [db] => test
//     [catalog] => def
//     [max_length] => 7
//     [length] => 400
//     [charsetnr] => 45
//     [flags] => 4097
//     [type] => 253
//     [decimals] => 0
// )

// we get 3 results because we had only 3 columns in db

// agar ham ise array ki form me dekhana chate he to
// simple echo use karo

?>