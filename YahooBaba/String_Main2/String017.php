<?php
// htmlspecialchars()

$str = '<a href="https:google.com"> Google </a>';
echo $str . "<br> <br>";

echo htmlspecialchars($str);


// Output
// &lt;a href=&quot;https:google.com&quot;&gt; Google &lt;/a&gt;gt;

?>