<?php
// multisimensional Associative Array

$marks = [
    "Krishana" => [
        "Physics" => 85,
        "Maths" => 90,
        "Physics" => 100
    ],
    "Salman" => [
        "Physics" => 45,
        "Maths" => 40,
        "Physics" => 400
    ]
    ];

    // echo $marks[0][1];

    // echo "<pre>";
    // print_r($marks);
    // echo "</pre>";

    foreach($marks as $key => $v1) {
        echo $key . "<br>";
    foreach($v1 as $v2) {
        echo $v2 . " ";
        echo "<br>";
    }
    }

?>