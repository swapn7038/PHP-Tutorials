<?php

require "classes/first.php";
require "classes/second.php";

$test = new first();
// Output -> Hello from first class

$test = new second();
// Output -> Hello from second class

?>