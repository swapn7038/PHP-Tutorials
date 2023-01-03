<?php

// substr_replace(string, replacement, start, length);

$string = "I love php, I love php too !!!"; 
$find = ["Php", "Love"];
$replece = ["cpp", "hate"];


echo str_replace($find, $replece, $string);

// Output 
// I love php, I love php too !!!

// str_replace() is an case-sensitive function. 

?>