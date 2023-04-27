<?php
echo "<pre>";
print_r(date_parse_from_format("mmddyyyy", "05172001"));
echo "</pre>";


// Output
// Array
// (
//     [year] => 
//     [month] => 17
//     [day] => 1
//     [hour] => 
//     [minute] => 
//     [second] => 
//     [fraction] => 
//     [warning_count] => 0
//     [warnings] => Array
//         (
//         )

//     [error_count] => 1
//     [errors] => Array
//         (
//             [8] => Data missing
//         )

//     [is_localtime] => 
// )

?>