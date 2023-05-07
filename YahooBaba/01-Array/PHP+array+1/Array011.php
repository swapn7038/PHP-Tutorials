<?php

// Showing key's name also

$age = [
    "bunty-1" => 40, 
    "bunty-2" => 20, 
    "bunty-3" => 30, 
    "bunty-4" => 40
];

foreach($age as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

?>