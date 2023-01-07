<?php
session_start();
session_unset();

session_destroy();

// We have to follow these three steps, to delete session. 

echo "Session is destroy." ;

?>