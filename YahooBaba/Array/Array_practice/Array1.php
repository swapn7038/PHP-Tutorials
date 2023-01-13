<?php

$colors = ["red", 20, "black", "yellow", "blue", "red", 20, "black", "yellow", "blue"];


echo "<ul>";
for($i = 0; $i <= 5 ; $i++) {
    echo "<li> $colors[$i]  </li>";
}

echo "</ul>";

// $colors[0] = "red";
// $colors[1] = "black";
// $colors[2] = "blac";
// $colors[3] = "yellow";


// echo $colors[0] . "<br>";
// echo $colors[1] . "<br>";
// echo $colors[2] . "<br>";
// echo $colors[3] . "<br>";


// echo "<pre>";
// print_r($colors);
// echo "</pre>";

?>