<?php
// Super global variables (7)

// 1. $_GET
// 2. $_POST
// 3. $_REQUEST
// 4. $_SERVER
// 5. $_SESSION
// 6. $_COOKIE
// 7. $_FILES


// get and post are used with forms
// get, post and request variables in form folder. 


// $_SERVER

// 1. http connection
// 2. server information
// 3. host information
// 4. url information 
// 5. Database
// 6. Print
// 7. Conditional 


// $_COOKIE

// 1. Create cookies => setcookie(name, value, expire, path, domain, secure, httponly);
// 2. View cookie value => $_COOKIE[name]


// $_SESSION

// 1. Information stored on server for temporary period of time, is known as Session store. 
// 2. Session store used while logining the user.
// Step 1 : session_start();
// Step 2 : $_SESSION[name] = value; 
// Step 3 : echo $_SESSION[name]; 


// Delete Session
// Step 1 : session_unset();
// Step 2 : session_destroy();

?>