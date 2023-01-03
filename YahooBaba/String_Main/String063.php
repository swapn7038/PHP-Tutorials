<?php

// substr_replace(string, replacement, start, length);

$string = "I love php, I love php too !!!"; 
$find = ["php", "love"];
$replece = ["cpp", "hate"];


echo str_replace($find, $replece, $string);

// Output 
// I hate cpp, I hate cpp too !!!

?>