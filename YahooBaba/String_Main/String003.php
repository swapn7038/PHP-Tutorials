<?php

$str = "Swapnil Shelke";

$newStr = chunk_split($str, 1, ".");

echo "<pre>";

print_r($newStr);

echo "</pre>";

// output
// S.w.a.p.n.i.l. .S.h.e.l.k.e.

?>