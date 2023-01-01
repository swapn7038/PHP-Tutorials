<?php
session_start();
if(isset($_SESSION['FirstName']))
 echo $_SESSION['FirstName']."'s Amazon ";

else 
$_SESSION['views'] = 1;
echo "Welcome to Amazon";
?>