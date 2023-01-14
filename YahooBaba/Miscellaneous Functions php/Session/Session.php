<?php

session_start();
// After writing session_start() we can create further sessions. 

// We use global varialbe here. 

$_SESSION["favcolor"] = "Orange"; 
// $_SESSION["firstName"] = "Swapnil"; 
// $_SESSION["lastName"] = "Shelke"; 

echo "Session variable is set";

?>