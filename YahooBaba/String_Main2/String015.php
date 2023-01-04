<?php
// htmlentities()

$str = '<a href="https://www.google.com"> Google </a>';


echo htmlentities($str, ENT_QUOTES);


// Output

// Google
// <a href="https://www.google.com"> Google </a>
 
// &lt;a href=&quot;https://www.google.com&quot;&gt; Google &lt;/a&gt;gt;

?>