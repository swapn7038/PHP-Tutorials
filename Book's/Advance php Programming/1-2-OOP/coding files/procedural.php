<?php

function hello($name){
    return "Hello $name!\n";
}

function goodbye($name){
    return "Goodbye $name\n";
}

function age($birthday){
    $ts = strtotime($birthday);

    if($ts === -1){
        return "Unknown";
    }

    else {
        $diff = time() - $ts;
        return floor($diff/(24*60*60*365));
    }
}

$name = 'george';
$bday = "10 Oct 1973";
echo hello($name);
echo "You are " . age($bday) . " years old. \n";
echo goodbye($name);

?>