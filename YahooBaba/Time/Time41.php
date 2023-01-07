<?php

$date = date_create("2001-05-17"); 
date_modify($date, "10 Days");

echo date_format($date, "d-m-Y");

// Output
// 27-05-2001

?>