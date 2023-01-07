<?php
echo strftime("%B %d %Y, %X %Z") . "<br>";

// Output
// January 06 2023, 12:03:46 India Standard Time
?>

<?php
echo strftime("%B %d %Y, %X %Z", mktime(21, 30, 0, 05, 18, 2001)) . "<br>";

// Output
// May 18 2001, 21:30:00 India Daylight Time
?>

<?php
echo strftime("%B %d %Y, %H:%M:%S", mktime(21, 30, 0, 05, 18, 2001)) . "<br>";

// Output
// May 18 2001, 21:30:00
?>

<?php
echo strftime("%D %d %Y, %H:%M:%S", mktime(21, 30, 0, 05, 18, 2001)) . "<br>";

// Output
// 05/18/01 18 2001, 21:30:00
?>