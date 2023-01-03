<?php
// htmlentities()

$str = '<a href="https://google.com"> Google </a>';


echo htmlentities($str, ENT_NOQUOTES);


// Output

// Google
// <a href="https://google.com"> Google </a>
// 
// &lt;a href="https://google.com"&gt; Google &lt;/a&gt;gt;   

?>