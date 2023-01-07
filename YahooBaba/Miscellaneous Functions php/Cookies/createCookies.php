<?php 
$_cookie_name = "User";
$_cookie_value = "Swapnil Shelke";

setcookie($_cookie_name, $_cookie_value, time() + (86400 * 30), "/");

?>

<html>
  <body>

  <?php

  if(!isset($_COOKIE[$_cookie_name])) {
  echo "Cookie is not set";
  }else {
    echo $_COOKIE[$_cookie_name];
  }


  ?>
  </body>
</html>
