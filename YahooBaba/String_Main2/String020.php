<?php
// htmlspecialchars()

$str = '<a href="https:google.com"> Google </a>';

echo htmlspecialchars($str, ENT_QUOTES);

// Output

// &lt;a href=&quot;https:google.com&quot;&gt; Google &lt;/a&gt;gt;
?>