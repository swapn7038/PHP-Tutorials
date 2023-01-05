<?php

$names = ["Swapnil" => 10, "Sahil" => 20, "Aashay" => 30, "Aniket" => 40, "Aashitosh" => 50, "Pranali" => 60, "Jagruti" => 70, "Shrushti" => 80, "Suraj" => 90];

foreach($names as $k => $x_value) {
    echo "Key : " . $k . ", Value = " . $x_value ;
    echo "<br>"; 
}

// Output
// Key : Swapnil, Value = 10
// Key : Sahil, Value = 20
// Key : Aashay, Value = 30
// Key : Aniket, Value = 40
// Key : Aashitosh, Value = 50
// Key : Pranali, Value = 60
// Key : Jagruti, Value = 70
// Key : Shrushti, Value = 80
// Key : Suraj, Value = 90

?>