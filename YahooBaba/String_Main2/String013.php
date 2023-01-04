<?php
// htmlentities()

$str = "A 'quote' is <b> Bold </b> ";


echo htmlentities($str);

// Output
// "A 'quote' is <b> Bold </b> "
// A &#039;quote&#039; is &lt;b&gt; Bold &lt;/b&gt;  

?>