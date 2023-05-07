<?php
$str = "Hello world. The world is awesome!!!";

echo stristr($str, "the", true);

// Output 
// Hello world.

// This only matches the character, not case sensitive.
?>