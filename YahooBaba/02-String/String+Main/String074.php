<?php


$string = "Hello world! The world is nice";

$array = ["Hello" => "Hii", "world" => "Earth"];

echo strtr($string, $array);

// Output 
// Hello world! The world is nice

?>