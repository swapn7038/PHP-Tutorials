<?php

$olddate = mktime(0,0,0,03,15,2001);

echo "<pre>";
print_r(localtime($olddate, true));
echo "</pre>";

// Output

// Array
// (
//     [tm_sec] => 0
//     [tm_min] => 0
//     [tm_hour] => 0
//     [tm_mday] => 15
//     [tm_mon] => 2
//     [tm_year] => 101
//     [tm_wday] => 4
//     [tm_yday] => 73
//     [tm_isdst] => 0
// )

?>