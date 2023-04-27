<?php
echo substr_compare("hello world!", "world!", 6 ) . "<br>";

// Output 
// 0
?>

<?php
echo substr_compare("hello world!", "World!", 6 ) . "<br>";

// Output 
// 1
?>


<?php
echo substr_compare("hello world!", "World!", 6 ) . "<br>";

// Output 
// 1
?>


<?php
echo substr_compare("hello world!", "world!", 0 ) . "<br>";

// Output 
// -1
?>


<?php
echo substr_compare("hello world!", "world!", 0, 3 ) . "<br>";

// Output 
// -1
?>


<?php
echo substr_compare("hello World!", "world!", 6, 3) . "<br>";

// Output 
// 0
?>



<?php
echo substr_compare("hello world!", "world!", 6, 3) . "<br>";

// Output 
// 0
?>


<?php
echo substr_compare("hello world!", "world!", -2, 2) . "<br>";

// Output 
// -1

?>


<?php
echo substr_compare("hello world!", "d!", -2, 2) . "<br>";

// Output 
// 0

?>

<?php
echo substr_compare("hello world!", "d!", -2, 2, true) . "<br>";

// Output 
// 0

?>


<?php
echo substr_compare("hello world!", "D!", -2, 2) . "<br>";

// Output 
// 1

?>

<?php
echo substr_compare("Hello world!", "d!", 0) . "<br>";

// Output 
// -1

?>