<?php

// pehle connection bana lete he, uska use karke program banyenge
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");
// test -> db name
// agar ye function run nahi hota to ham message print karenge die() function ka use karke
// "Connection Failed"

// uske bad ham sql ki command likhenge
// uske liye ek variable le lete he
$sql = "SELECT * FROM students";
// above command ko run karne ke liye ham apana function chala lenge => mysqli_query()

$result = mysqli_query($conn, $sql) or die("Query Field");
// mysqli_query ke andar 2 parameters pass karenge, ek connection aaur dusra sql ki command
// agar ye query run nahi hoti to die function run hoga

// ab jo bhi db ke andar data honga, wo sara fetch hoke $result variable ke andar aa jayega
// agar isko ham print karana chahte he to ham use karenge mysql ke fetch functions

// pehla function ham use karenge, fetch_assoc 
// uske liye ek variable le lete he, $row nam se
$row = mysqli_fetch_assoc($result);
// mysqli_fetch_assoc() ye function associative array fetch karke lata he
// iske andar ham $result variable pass karenge
// mysqli_fetch_assoc() ek bari me ek hi result fetch karta he
// abhi ke result me ye pehla jo result hoga usi ko fetch karke layega, 
// $row nam ke variable ke andar
// to jo $row nam ka variable he wo ek assocciative array ban jayega

// us data ko print karna ho to usko print_r ke andar dal do
// print_r($row);  
// formatting sahi karne ke liye usko pre tag me dal do
echo "<pre>";
// print_r($row);  
echo "</pre>";

// Array
// (
//     [id] => 1
//     [first_name] => Swapnil 
//     [last_name] => Shelke
// )

// ye information database se hame mil rahi
// yaha pe key bhi ban rahi he, jo column ke name the wahi key he
// last_name, first_name and id are columns name
// jab ham assoc ka use karte he to hame keys bhi milti he

// ab agar ham is function ki values print karna chate he to direct echo se kar sakte
echo $row['first_name'] . " " . $row["last_name"];
// Swapnil Shelke

// agar ham is table ki sari values dekhana chate he to yaha pe loop chalana padega

// Next program in fetch-assoc2

?>