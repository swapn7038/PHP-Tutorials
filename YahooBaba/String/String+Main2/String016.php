<?php
// htmlentities()

$str = '<a href="https://www.google.com"> Google </a>';


echo htmlentities($str, ENT_NOQUOTES);


// Output

// Google
// <a href="https://www.google.com"> Google </a>

// &lt;a href="https://www.google.com"&gt; Google &lt;/a&gt;gt;  

?>