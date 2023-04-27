<?php

$data = array(
    'fullname' => 'Swapnil shelke',
    'age' => '41',
    'email' => 'swapnil@gmail.com',
);

$mydata = filter_var_array($data);

var_dump($mydata);

?>