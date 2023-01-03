<?php

$str = "Swapnil Shelke";

$newStr= chunk_split($str, 2, "*");

echo "<pre>";

print_r($newStr);

echo "</pre>";

// Output 
// Sw*ap*ni*l *Sh*el*ke*

?> 