<?php
$str = 'Hello I am Swapnil Shelke ';

echo $str . "<br>";

$newStr = addcslashes($str, "A..Z");

echo $newStr;


// Output

// Hello I am Swapnil Shelke
// \Hello \I am \Swapnil \Shelke

?>