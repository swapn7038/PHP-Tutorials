<?php
echo "Time & Date : " . date("d-m-Y h:i:sa ") . "<br><br>";

echo date("d-m-Y h:i:sa ", mktime(0, 0, 0, 5, 17, 2001))  . "<br><br>";
echo date("d-m-Y h:i:sa ", gmmktime(0, 0, 0, 5, 17, 2001))  . "<br><br>";


// Output
// Time & Date : 06-01-2023 09:17:20am
// 17-05-2001 12:00:00am
// 17-05-2001 02:00:00am
?>