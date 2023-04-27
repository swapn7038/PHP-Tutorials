<?php

$filters = array(
    "stname" => array(
        "filter" => FILTER_CALLBACK,
        "flags" => FILTER_FORCE_ARRAY,
        "options" => "ucwords"
    ), 
    "stmarks" => array(
        "filter" => FILTER_VALIDATE_INT,
        "filter" => array(
            "min_range" => 1, 
            "max_range" => 100
        )
        ),
        "stemail" => FILTER_VALIDATE_EMAIL,
    );

    print_r(filter_input_array(INPUT_POST, $filters));


?>