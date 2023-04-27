<?php

$str = "Swapnil Shelke";

$newStr= chunk_split($str, 2, "<h1>Heading One</h1>");

echo "<pre>";

print_r($newStr);

echo "</pre>";

// Output 
// Sw
// Heading One
// ap
// Heading One
// ni
// Heading One
// l 
// Heading One
// Sh
// Heading One
// el
// Heading One
// ke
// Heading One

?> 