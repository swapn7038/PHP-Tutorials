<?php

// foreach loop in php 


// Syntax 
// foreach($array as $value) {
//     Statement
// }


// $array = array(10, 20, 30);

// foreach ($array as $value) {
//     echo $value . "<br>";
// }


$colors = [
    "red" => 10,
    "blavk" => 20, 
    "blue" => 30, 
    "orange" => 40
];

echo "<ul>";


foreach($colors as $key => $value){
    
    echo "<h2> $key  . $value </h2>";
}

echo "</ul>";

?>