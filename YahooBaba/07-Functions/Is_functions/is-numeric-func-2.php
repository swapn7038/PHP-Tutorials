<?php
$var = 8.55;

if(is_numeric($var)){
    echo " $var  is an numeric value";
} else {
    echo "$var is not an Numeric value";
}

// is_numeric() will only check, that is it a numeric value or not, 
// it does'nt matter where it is integer or float

?>