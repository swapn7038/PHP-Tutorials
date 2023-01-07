<?php
$date = getdate();
echo $date['month'];        

echo "<pre>";
print_r(getdate());
echo "</pre>";

// Output
// January
// Array
// (
//     [seconds] => 54
//     [minutes] => 3
//     [hours] => 10
//     [mday] => 6
//     [wday] => 5
//     [mon] => 1
//     [year] => 2023
//     [yday] => 5
//     [weekday] => Friday
//     [month] => January
//     [0] => 1672995834
// )


?>