<?php

// printing indexed array using forloop with list() function
// foreach loop using list();

$emp = [
    [1, "Krishana", "Manager", 5000],
    [2, "Salman", "Salesman", 50000],
    [3, "Mohan", "Operator", 10000],
    [4, "Amir", "Driver", 1000],
];


echo "<table border='2px' cellpadding='10px' cellspacing='0'>
   <tr> 
     <th>Emp Id. </th> 
     <th>Name</th> 
     <th>Designation </th> 
     <th>Salary </th> 
   </tr> 
   ";
foreach($emp as list($id, $name, $designation, $salary)) {
    echo "<tr> <td>$id </td>  <td>$name </td>  <td>$designation </td>  <td>$salary  </td> </tr> ";
}
echo "</table>";
?>