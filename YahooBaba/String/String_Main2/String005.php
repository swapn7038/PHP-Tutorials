<?php
$str = 'Hello I am "Swapnil Shelke" ';

echo $str . "<br>";

$newStr = addcslashes($str, "Sa");

echo $newStr;


// Output

// Hello I am "Swapnil Shelke"
// Hello I \am "\Sw\apnil \Shelke"

?>