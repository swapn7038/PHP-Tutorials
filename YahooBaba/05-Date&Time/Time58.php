<?php
// date_time_set(object, hour, minute, second, microseconds); 

$date = date_create("2015-05-15");

date_time_set($date,05, 20, 45);

echo date_format($date, "d-m-Y H:i:s");

// Output
// 15-05-2015 05:20:45

?>