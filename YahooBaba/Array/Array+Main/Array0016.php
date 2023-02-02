<?php

$a = [1, 2, 3, 4, 5, 6];
$b = [6, 7, 8, 9, 10, 11, 13, 24, 55];

echo "<pre>";

print_r(array_diff($a, $b));

echo "</pre>";

// Output

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )

?>

<?php

// Explanation

// We use array_diff() function here...

?>