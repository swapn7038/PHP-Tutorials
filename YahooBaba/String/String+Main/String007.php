<?php

$str = "Swapnil Shelke";

$newStr= chunk_split($str, 3, "-");

echo "<pre>";

print_r($newStr);

echo "</pre>";

// Output 
// Swa-pni-l S-hel-ke-

?> 