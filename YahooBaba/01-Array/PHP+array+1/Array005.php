<?php
// Associative Array

// php 5.2 version me Associative array ko likhane ka naya
// tarika aaua tha
// ya madhe aaplyala, array word cha use nahi karava lagat
// direct square bracket cha use karu shakto aapa

$age = [
    "bill1" => 55,
    "bill2" => 65,
    "bill3" => 75,
];

// ha pan ek way ahe

echo $age["bill1"]   .  "<br>";
echo $age["bill2"]   .  "<br>";
echo $age["bill3"]   .  "<br>";

echo "<pre>";
print_r($age);
echo "</pre>";

?>