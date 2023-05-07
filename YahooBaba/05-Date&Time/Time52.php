<?php
echo "<pre>";
print_r(date_parse("2001-07-17 12:30:25.5"));
echo "</pre>";

$date = date_parse("2001-07-17 12:30:25.5");

echo $date['day'];

// Output

// Array
// (
//     [year] => 2001
//     [month] => 7
//     [day] => 17
//     [hour] => 12
//     [minute] => 30
//     [second] => 25
//     [fraction] => 0.5
//     [warning_count] => 0
//     [warnings] => Array
//         (
//         )

//     [error_count] => 0
//     [errors] => Array
//         (
//         )

//     [is_localtime] => 
// )
// 17
?>