<?php

// substr_replace(string, replacement, start, length);

$string = "I love php, I love php too !!!"; 

echo str_replace("php", "", $string);

// Output 
// I love , I love too !!!

?>