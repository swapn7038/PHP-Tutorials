<?php
$var = 99.9;

if((filter_var($var, FILTER_VALIDATE_INT))){
    echo "Its an integer";
} else {
       echo "No integer";
}


?>