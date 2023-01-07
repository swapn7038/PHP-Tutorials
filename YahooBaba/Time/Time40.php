<?php

$date = date_create("2001-05-17"); 
date_sub($date, date_interval_create_from_date_string("10 days"));

echo date_format($date, "d-m-Y");

// Output
// 07-05-2001

?>