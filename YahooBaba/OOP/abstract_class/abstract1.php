<?php

abstract class parentClass{

    public $name; 


}

$test = new parentClass();

?>


<?php

// iith aapan class samor abstract keyword lavala tar aapan tya class cha instance nahi banvu
// shakat.

// Fatal error: Uncaught Error: Cannot instantiate abstract class parentClass 

// ek type ne instantiate karne manje copy, mirroring karne hoy.

// jeva kadhi aapan object banvato, teva aapan class chi ek copy, instance create karto. 

?>