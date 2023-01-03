<?php
echo strnatcmp("5hello", "10hello");

// Output
// -1
?>


<?php
echo strnatcmp("5hello world world", "10hello");

// Output
// -1
?>


<?php
echo strnatcmp("5Hello world world", "10hello");

// Output
// -1
?>


<?php
echo strnatcmp("10Hello world world", "10Hello world world");

// Output
// 0
?>


<?php
echo strnatcmp("10Hello world world", "10Hello world world");

// Output
// 0
?>