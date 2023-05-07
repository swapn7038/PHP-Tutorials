<?php

echo "Time & Date : " . date("d-m-Y h:i:sa ") . "<br><br>";
echo date("d-m-Y", mktime(0, 0, 0, 5, 17, 2001));


// Output
// Time & Date : 06-01-2023 09:13:05am
// 17-05-2001

?>