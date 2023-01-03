<?php
  echo strncmp("hello world!", "hello world! hello world",10);

// Output 
// 0
   
?>

<?php
  echo strcasecmp("HELLO world!", "hello world!");

// Output 
// 0
   
?>


<?php
  echo strcasecmp("HELLO world!", "hello world! Hii");

// Output 
// -4
   
?>