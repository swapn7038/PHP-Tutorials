<?php
$str = "Hello world. The world is awesome!!!";

echo stristr($str, "WORLD", true);

// Output 
// Hello

// This only matches the character, not case sensitive.
?>