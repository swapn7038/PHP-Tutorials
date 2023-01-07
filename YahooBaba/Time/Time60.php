<?php
// echo date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();

$tz = timezone_open("Asia/kolkata");
echo timezone_name_get($tz);

// Output
// Asia/kolkata
?>