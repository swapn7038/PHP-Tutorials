<?php

$array = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );

//   $last_names = array_column($array, 'last_name');
//   print_r($last_names);

$last_names = array_column($array, 'last_name');
print_r($last_names);

// Output
// Array ( [0] => Griffin [1] => Smith [2] => Doe )

?>


<?php

// Explanation

// we took multidimensional array.

// I dont understand array_column() here.
?>