<?php

// array_replace()
// array_replace_recursive()

$a = ["A", "B", "C", "D", "E"];
$b = ["X", "Z"];

$c = array_replace($a, $b);


echo "<pre>";
echo print_r($c);
echo "</pre>";

?>