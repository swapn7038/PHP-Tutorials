<?php 

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql =  "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Query Failed");

$data = mysqli_fetch_array($result);

echo "<pre>";
// print_r($data);
echo "</pre>";

// About fetch_array function
// fetch_array() function gives us result in index as well as associated array format
// fetch_array() function bhi ek time me ek hi row, data fetch karega

// now we can acces the data using both arrays
echo $data[0] . "<br>" . $data['first_name'];

// to print, access more than one values 
// check next file

?>