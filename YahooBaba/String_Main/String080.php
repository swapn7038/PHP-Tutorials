<?php
  echo strnatcmp("hello world!", "hello world!") . "<br>";

// Output 
// 0
   
?>

<?php
  echo strnatcmp("HELLO world!", "hello world!") . "<br>";

// Output 
// -1
   
?>


<?php
  echo strnatcmp("hello world! hello hello", "hello world!") . "<br>";

// Output 
// 1
   
?>