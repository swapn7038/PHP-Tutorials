<?php

echo "<h1> PHP program to calculate compound interest </h1>";

$amount = 0;
$principle_amount = 6000;
$rate_of_interest = 9;
$number_of_years = 2;

$amount = $principle_amount * pow((1 + $rate_of_interest /100), 2);


$compound_interest = $amount - $principle_amount;

echo $compound_interest . " This is our compound interest for one year"; 


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