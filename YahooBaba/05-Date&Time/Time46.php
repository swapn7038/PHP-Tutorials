<?php
$olddate = mktime(0,0,0,03,15, 2015);

$date = getdate($olddate); 
echo $date['month'] . " - " . $date['year']; 

// Output
// March - 2015
?>