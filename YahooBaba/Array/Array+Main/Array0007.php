<?php

$pets  =  array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");

print_r(array_change_key_case($pets,CASE_UPPER));

// Output
// Array ( [A] => Cat [B] => Bird [C] => Horse )
?>

<?php

// Explanation 

// we took array $pets named here. 

// We can initialoze an array with square bracket or we can yse keyword array here. 

?>