<?php
$date1 = date_create("2001-05-17");
$date2 = date_create("2022-05-17");

$diff = date_diff($date1, $date2); 


echo $diff->format("%r%a days");

echo "<pre>";
print_r($diff);
echo "</pre>";

// Output
//
// 7670 days
// DateInterval Object
// (
//     [y] => 21
//     [m] => 0
//     [d] => 0
//     [h] => 0
//     [i] => 0
//     [s] => 0
//     [f] => 0
//     [weekday] => 0
//     [weekday_behavior] => 0
//     [first_last_day_of] => 0
//     [invert] => 1
//     [days] => 7670
//     [special_type] => 0
//     [special_amount] => 0
//     [have_weekday_relative] => 0
//     [have_special_relative] => 0
// )
?>