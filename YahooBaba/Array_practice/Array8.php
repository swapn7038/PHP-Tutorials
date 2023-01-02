<?php
// count() and size()
// return the number of values / elements of an array 

$a = ["A", "B", "C", "D", "E", "F", "G", "I"];

echo "<pre>";
echo print_r(array_count_values($a));
echo "</pre>";

// $len = count($a);

// for($i = 0; $i < $len ; $i++) {
//     echo $a[$i] . "<br>";
// }



// echo count($a) . "<br>";
// echo sizeof($a);


// $food = array(
//     'fruits' => array('orange', 'banana', 'apple'),
//     'veggie' => array('carrot', 'collard', 'pea')
// );

// echo count($food, 1);

// echo count($food['fruits'], 1);

?>