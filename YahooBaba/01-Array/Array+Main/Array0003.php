<?php
$names = ["Swapnil", "Sahil", "Aashay", "Aniket", "Aashitosh", "Pranali", "Jagruti", "Shrushti", "Suraj"];

$length = count($names);

for($i = 0; $i < $length; $i++) {
    echo $names[$i];

    echo "<br>";
}

// Output
// Swapnil
// Sahil
// Aashay
// Aniket
// Aashitosh
// Pranali
// Jagruti
// Shrushti
// Suraj
?>

<?php

// Explanation

// Here we loop through an array. 
// We use count() function to count the length of an array ( number of elements ), and store it in length variable. 
// Then we use for loop to print the elements. 
?>