<?php
// convert_uuencode()
// convert__uudecode()

$str = "Hello World!"; 

$encodeString = convert_uuencode($str);

 $ecodesString = convert_uudecode($encodeString);

 echo $ecodesString;

//  Output
// Hello World!

?>