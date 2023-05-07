<?php

$str = "Swapnil <b> Shelke </b>  <i> DITMS </i>"; 

echo wordwrap($str, 2, "<br>", true);


// Output
// Sw
// ap
// ni
// l
// >
// Sh
// el
// ke
// b>
// <
// i>
// DI
// TM
// S
// i>
?>