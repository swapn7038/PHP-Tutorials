<?php

date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get() . "<br>";

$tz = timezone_open("Europe/Berlin");
echo timezone_name_get($tz);

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

// Output
// Asia/Kolkata
// Europe/Berlin
// Array
// (
//     [country_code] => DE
//     [latitude] => 52.5
//     [longitude] => 13.36666
//     [comments] => Germany (most areas)
// )

?>