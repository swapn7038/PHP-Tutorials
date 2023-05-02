<?php

// Associative array

// aapan key-value pair madhe values store karto
// Khali delyala example madhe, aashay, sahil, aashitish,
// niles hya keys ahet...
// ani 55, 10, 90 hya values ahet...
// key ani value madhe aaplyala ek symbol ghavya lagat,
// => he wala symbol

// Associative array madhe aapan mixed values/keys pan taku shakto...
// manje different - different data types



$age = array(
    "aashay" => 55, 
    "sahil" => 20, 
    "aashitosh" => 90,
    "nilesh" => 1
);

echo $age["aashay"]  .  "<br>";
echo $age["sahil"]  .  "<br>";
echo $age["aashitosh"]  .  "<br>";
echo $age["nilesh"];

// foreach($age as $a){
//     echo $a . "<br>";
// }

// How to print values of an associative 
// array, using the for loop...

?>