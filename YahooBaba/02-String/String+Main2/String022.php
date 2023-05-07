<?php

$str = '<a href="https:google.com">Google</a>';

$htmlent = htmlspecialchars($str, ENT_QUOTES);

echo $htmlent  .  "<br>";

echo htmlspecialchars_decode($htmlent);


// Output
// <a href="https:google.com">Google</a>
// Google

?>