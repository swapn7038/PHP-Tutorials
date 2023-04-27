<?php
$var = 100;

var_dump(filter_var($var, FILTER_VALIDATE_INT));

// Output 
// int(100)
?>