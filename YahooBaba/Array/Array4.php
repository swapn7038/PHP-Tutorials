<?php
// multidimensional data 

$emp = [
    [1, "Krishana", "Manager", 5000],
    [2, "Salman", "Salesman", 50000],
    [3, "Mohan", "Operator", 10000],
    [4, "Amir", "Driver", 1000],
];

// echo $emp[0][1];

// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// for($row = 0; $row < 4; $row++) {
//     for($col= 0; $col < 4; $col++) {
//        echo $emp[$row] [$col] . " ";
//     }

//     echo "<br>";
// }

// foreach loop 


echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
         
      <th>Emp Id.</th>
      <th>Emp Name</th>
      <th>Designation</th>
      <th>Salary</th>

</tr>";
  
foreach($emp as $v1) {
    echo "<tr>";
    foreach($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "<tr>";
}

echo "</table>";

?>