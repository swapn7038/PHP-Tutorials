<?php

$str = "Swapnil Shelke";

$newStr= chunk_split($str, 1, " <h6>swapnil Shelke  </h6>");

echo "<pre>";

print_r($newStr);

echo "</pre>";

// Output 
// 
// S 
// swapnil Shelke  
// w 
// swapnil Shelke  
// a 
// swapnil Shelke  
// p 
// swapnil Shelke  
// n 
// swapnil Shelke  
// i 
// swapnil Shelke  
// l 
// swapnil Shelke  
  
// swapnil Shelke  
// S 
// swapnil Shelke  
// h 
// swapnil Shelke  
// e 
// swapnil Shelke  
// l 
// swapnil Shelke  
// k 
// swapnil Shelke  
// e 
// swapnil Shelke 