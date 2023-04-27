<?php
$str = 'Hello I am Swapnil Shelke ';

echo $str . "<br>";

$newStr = addcslashes($str, "a..z");

echo $newStr;


// Output

// Hello I am Swapnil Shelke
// H\e\l\l\o I \a\m S\w\a\p\n\i\l S\h\e\l\k\e

?>