<?php
  echo strncasecmp("HELLO world!", "hello world! Hii", 5);

// Output 
// 0
   
?>

<?php
  echo strncasecmp("HELLO world!", "hello world! Hii", 50);

// Output 
// -4
   
?>