<?php

$var = 9.9;

filter_var($var, FILTER_VALIDATE_INT);

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo "$var is an integer";
}else {
    echo "$var is not an Integer";
}

?>