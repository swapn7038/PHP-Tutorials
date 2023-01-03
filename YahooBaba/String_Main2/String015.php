<?php
// htmlentities()

$str = '<a href="https://google.com"> Google </a>';


echo htmlentities($str, ENT_QUOTES);


// Output

// Google
// <a href="https://google.com"> Google </a>
// 
// &lt;a href=&quot;https://google.com&quot;&gt; Google &lt;/a&gt;gt;   

?>