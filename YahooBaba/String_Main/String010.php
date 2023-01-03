<?php

$str = "Swapnil Shelke";

$newStr= chunk_split($str, 2, "<ul> <li></li> </ul>");

echo "<pre>";

print_r($newStr);

echo "</pre>";

// Output 
// Sw
 
// ap
 
 
// ni
 
 
// l 
 
 
// Sh
 
 
// el
 
 
// ke
 
 

?> 