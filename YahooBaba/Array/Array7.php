<?php

// printing multidimensional associative array elements 
// using foreach loop and list();  


$marks = [
    "Krishana" => [
        "Physics" => 85,
        "Maths" => 90,
        "Chem" => 10
    ],
    "Salman" => [
        "Physics" => 45,
        "Maths" => 40,
        "Chem" => 40
    ],
    "Kartik" => [
        "Physics" => 46,
        "Maths" => 60,
        "Chem" => 60
    ]

    ];

    // array ends

    echo "<table border='1px' cellspacing='0' cellpadding='5px'>
    
     <tr> 
       <th> Physics </th>
       <th> Maths</th>
       <th> Chemistry</th>
    </tr>";

    foreach($marks as list("Physics" => $physics, "Maths" => $maths, "Chem" => $chem)){
        echo   " <tr> <td>  $physics</td>  <td>$maths</td>  <td>$chem</td> </tr>";
    }

    echo "</table>";
?>