<?php 
$cookie_name = 'User';
$cookie_value = "Swapnil";

// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie($cookie_name, $cookie_value);

?>

<html>
  <body>

  <?php

  if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie is not set";
  }else {
    echo $_COOKIE[$cookie_name];
  }
  

  ?>
  </body>
</html>
