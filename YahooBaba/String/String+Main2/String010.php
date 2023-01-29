<?php
$str = 'Hello \I am \Swapnil Shelke ';

echo $str . "<br>";

$newStr = addcslashes($str, "a..z");

// echo $newStr;


echo stripslashes($newStr);


// Output

// Hello \I am \Swapnil Shelke
// Hello I am Swapnil Shelke
?>