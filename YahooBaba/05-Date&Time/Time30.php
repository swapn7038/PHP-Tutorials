<?php
// checkdate(month, day, year); 
// date_diff(datetime1, datetime2, absolute); 

echo checkdate(2, 15, 2014) . "<br>"; 
echo checkdate(2, 29, 2014) . "<br>"; 
echo checkdate(2, 28, 2014) . "<br>"; 
echo checkdate(2, 28, 2024) . "<br>"; 

// Output
// 1
// 0
// 1
// 1

// 1 means true

?>