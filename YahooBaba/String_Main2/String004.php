<?php
$str = 'Hello I am "Swapnil Shelke" ';

echo $str . "<br>";

$newStr = addslashes($str);

echo stripslashes($newStr);

// Output

// Hello I am "Swapnil Shelke"
// Hello I am "Swapnil Shelke"

?>