<?php
$str = "Hello world. The world is awesome!!!";

echo strchr($str, "world", true);

// Output 
// Hello

// This only matches the character, not case sensitive.
?>