<?php 
$target = mktime(0,0,0,14, 11, 2022);
$today = time();
$difference = ($target-$today);
$days = (int) ($difference/86400);
print "Our event will occur in $days days";
?>