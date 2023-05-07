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


$last_names = array_column($array, 'id' , 'last_name');
print_r($last_names);

// Output

// Array ( [Griffin] => 5698 [Smith] => 4767 [Doe] => 3809 )

?>