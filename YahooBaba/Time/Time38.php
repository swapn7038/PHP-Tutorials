<?php

$date = date_create("2001-05-17"); 
date_add($date, date_interval_create_from_date_string("30 days"));

echo date_format($date, "d-m-Y");

// Output
// 16-06-2001

// date_create_from_format
// date_create_immutable
// date_create_immutable_from_format
// date_date_set
// date_default_timezone_get
// date_default_timezone_set
// date_diff
// date_format
// date_get_last_errors
// date_interval_create_from_date_string
// date_interval_format
// date_isodate_set
// date_modify
// date_offset_get
// date_parse
// date_parse_from_format
// date_sub
// date_sun_info
// date_sunrise
// date_sunset
// date_time_set
// date_timestamp_get
// date_timestamp_set
// date_timezone_get
// date_timezone_set

?>