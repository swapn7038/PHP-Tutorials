<?php
// date_create(time, timezone);
// date_format(object, format);

$date = date_create("2023-05-17");

echo date_format($date, "l");

// Output
// Wednesday
?>