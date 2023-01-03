<?php
// htmlspecialchars()

$str = '<a href="https:google.com"> Google </a>';

echo htmlspecialchars($str, ENT_NOQUOTES);

// Output

// &lt;a href="https:google.com"&gt; Google &lt;/a&gt;gt;
?>