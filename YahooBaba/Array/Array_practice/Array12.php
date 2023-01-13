<?php

// Array_shift(); => deletes first entry
// Array_unshift(); => adds element to the starting 

$a = ["A", "B", "C"];

array_unshift($a, "Z", "X", 54, 100);

echo "<pre>";
print_r($a);
echo "</pre>";

?>