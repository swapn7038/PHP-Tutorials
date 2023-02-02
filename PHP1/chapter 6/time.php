<?php 
$target = mktime(0,0,0,14, 11, 2023);
$today = time();
// echo "Value of time function is : " . time() . "</br>";

$difference = ($target-$today);
$days = (int) ($difference/86400);
print "Our event will occur in $days days";
?>