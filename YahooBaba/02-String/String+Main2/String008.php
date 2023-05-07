<?php
$str = 'Hello I am Swapnil Shelke ';

echo $str . "<br>";

$newStr = addcslashes($str, "a..z");

// echo $newStr;


echo stripcslashes($newStr);


// Output

// Hello I am Swapnil Shelke
// Hello I m Swp il Shelke

?>