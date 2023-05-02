# PHP Session

PHP session is used to store and pass information from one page to another temporarily (until user close the website).

PHP session technique is widely used in shopping websites where we need to store and pass cart information e.g. username, product code, product name, product price etc from one page to another.

PHP session creates unique user id for each browser to recognize the user and avoid conflict between multiple browsers.

# PHP session_start() function

PHP session_start() function is used to start the session. It starts a new or resumes existing session. It returns existing session if session is created already. If session is not available, it creates and returns new session.

Syntax

bool session_start ( void )  
Example

session_start();

# PHP $\_SESSION

PHP $\_SESSION is an associative array that contains all session variables. It is used to set and get session variable values.

Example: Store information
$\_SESSION["user"] = "Sachin";

Example: Get information
echo $\_SESSION["user"];

# PHP Session Example

File: session1.php

<?php  
session_start();  
?>
<html>  
<body>  
<?php  
$_SESSION["user"] = "Sachin";  
echo "Session information are set successfully.<br/>";  
?>  
<a href="session2.php">Visit next page</a>  
</body>  
</html>

session2.php

<?php  
session_start();  
?>
<html>  
<body>  
<?php  
echo "User is: ".$_SESSION["user"];  
?>  
</body>  
</html>

# PHP Session Counter Example

sessioncounter.php

<?php  
   session_start();  
  
   if (!isset($_SESSION['counter'])) {  
      $_SESSION['counter'] = 1;  
   } else {  
      $_SESSION['counter']++;  
   }  
   echo ("Page Views: ".$_SESSION['counter']);  
?>

# PHP Destroying Session

PHP session_destroy() function is used to destroy all session variables completely.

File: session3.php

<?php  
session_start();  
session_destroy();  
?>
