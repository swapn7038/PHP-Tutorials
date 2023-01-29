<?php
  echo strcmp("hello world", "hello world");
   
//   Output
// 0

// Here, 0 means, both aare matching.  
   
?>


<?php
  echo strcmp("hello world", "hello ");
   
// Output
// 5

// Here we get 5. 
// If we get any positive number, that means string one is greater than string two . 
   
?>


<?php
  echo strcmp("hello world", "hello world worldo");
   
// Output
// -7

// Here -7 means, string two is greater than string one

?>