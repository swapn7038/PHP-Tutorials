<?php

$names = ["Swapnil" => 10, "Sahil" => 20, "Aashay" => 30, "Aniket" => 40, "Aashitosh" => 50, "Pranali" => 60, "Jagruti" => 70, "Shrushti" => 80, "Suraj" => 90];


echo "<pre>";
print_r (array_change_key_case($names, CASE_UPPER));
echo "</pre>";

// Output
// Array
// (
//     [SWAPNIL] => 10
//     [SAHIL] => 20
//     [AASHAY] => 30
//     [ANIKET] => 40
//     [AASHITOSH] => 50
//     [PRANALI] => 60
//     [JAGRUTI] => 70
//     [SHRUSHTI] => 80
//     [SURAJ] => 90
// )
?>

<?php

// Explanation

// Here we use array_change_key_case() function. 
// This helps us to transform letters from lowercase to uppercase. 

// In this function we have to pass two parameters one is array name, 
// second is in which case we have to transform it. 

// We use print_r() function to print the value of the elements. 

// We cannot use echo here to print values, like we used previously in indexed array. 
// Because this is now converted in array form.

?>