<?php
$date = getdate();
echo $date['month']. " - " . $date['year'];        

echo "<pre>";
print_r(getdate());
echo "</pre>";

// Output

// January - 2023
// Array
// (
//     [seconds] => 22
//     [minutes] => 5
//     [hours] => 10
//     [mday] => 6
//     [wday] => 5
//     [mon] => 1
//     [year] => 2023
//     [yday] => 5
//     [weekday] => Friday
//     [month] => January
//     [0] => 1672995922
// )

?>