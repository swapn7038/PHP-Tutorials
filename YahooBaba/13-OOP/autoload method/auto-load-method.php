<?php

// require "classes/first.php";
// require "classes/second.php";

function __autoload($class){
    require "classes/" . $class . ".php";
}

$test = new first();
$test = new second();

// Fatal error: __autoload() is no longer supported, 
// use spl_autoload_register() instead in C:\xampp\htdocs\PHP-Tutorials\YahooBaba\OOP\autoload method\auto-load-method.php on line 6

?>