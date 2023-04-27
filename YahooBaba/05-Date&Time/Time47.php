<?php
$olddate = mktime(0,0,0,03,15, 2015);

$date = getdate($olddate); 
echo $date['month'] . " - " . $date['year']; 


echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";


// Output
// March - 2015
// Array
// (
//     [seconds] => 0
//     [minutes] => 0
//     [hours] => 0
//     [mday] => 15
//     [wday] => 0
//     [mon] => 3
//     [year] => 2015
//     [yday] => 73
//     [weekday] => Sunday
//     [month] => March
//     [0] => 1426374000
// )
?>