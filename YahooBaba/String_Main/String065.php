<?php

// substr_replace(string, replacement, start, length);

$string = "I love php, I love php too !!!"; 
$find = ["Php", "Love"];
$replece = ["cpp", "hate"];


echo str_ireplace($find, $replece, $string);

// Output 
// I hate cpp, I hate cpp too !!!

// str_ireplace() is an case-insensitive function. 

?>