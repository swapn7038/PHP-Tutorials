<?php
$filters = array (
  "name" => array ("filter"=>FILTER_CALLBACK,
                             "flags"=>FILTER_FORCE_ARRAY,
                             "options"=>"ucwords"
                            ),
  "age"   => array ( "filter"=>FILTER_VALIDATE_INT,
                              "options"=>array("min_range"=>1,"max_range"=>120)
                            ),
  "email" => FILTER_VALIDATE_EMAIL
  );
print_r(filter_input_array(INPUT_POST, $filters));
?>