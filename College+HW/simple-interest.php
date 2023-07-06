<?php

echo "<h1> PHP program to calculate simple interest </h1>";

$simple_interest = 0;
$principle_amount = 5000;
$total_amount = 0;
$rate_of_interest = 9;
$time = 146/365;

$simple_interest =( $principle_amount * $time * $rate_of_interest ) / 100;

echo $simple_interest . "/day";


?>


<html>
    <head>
        <style>
            h1{
                text-align:center;
                font-family:sans-serif;
            }
        </style>
    </head>
</html>