<?php

$str = '<a href="https:google.com">Google</a>';

$htmlent = htmlspecialchars($str, ENT_NOQUOTES);

echo $htmlent  .  "<br>";

echo html_entity_decode($htmlent);

// Output
// <a href="https:google.com">Google</a>
// Google

?>