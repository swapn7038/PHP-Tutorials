<?php
$olddate = mktime(0,0,0,05,17, 2001);

$date = getdate($olddate); 
echo $date['month'] . " - " . $date['year']; 


echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";


// Output
// May - 2001
// Array
// (
//     [seconds] => 0
//     [minutes] => 0
//     [hours] => 0
//     [mday] => 17
//     [wday] => 4
//     [mon] => 5
//     [year] => 2001
//     [yday] => 136
//     [weekday] => Thursday
//     [month] => May
//     [0] => 990050400
// )
?>