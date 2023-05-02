<?php

$email = "Swapnilshelke@gmail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// validate e-mail 
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}

?>