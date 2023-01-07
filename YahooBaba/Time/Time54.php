
<?php
echo date("d-m-Y", (strtotime("now"))) . "<br>";
echo date("d-m-Y", (strtotime("3 March 2005")))  . "<br>";
echo date("d-m-Y H:m", (strtotime("+10 hours")))  . "<br>";
echo date("d-m-Y H:m", (strtotime("+1 week 3 days 7 hours 5 seconds")))  . "<br>";
echo date("d-m-Y H:m", (strtotime("next monday")))  . "<br>";
echo date("d-m-Y H:m", (strtotime("last sunday")))  . "<br>";
echo date("d-m-Y H:m", (strtotime("last Friday")))  . "<br>";



// Output
// 06-01-2023
// 03-03-2005
// 06-01-2023 22:01
// 16-01-2023 19:01
// 09-01-2023 00:01
// 01-01-2023 00:01
// 30-12-2022 00:12
?>








<?php
// strtotime("time");
// strftime("format", "timestamp");
// gmstrftime("");


// strftime(format, timestamp);

// %a - Weekday name
// %A - Full weekday name
// %b - Month name
// %B - Full month name
// %c - prefered date and time representation
// %C -Century number (the year divided by 100, range 00 to 99)
// %d - day of the month
// %D - same sa %m/%d/%y 
// %e - 
// %E -
?>