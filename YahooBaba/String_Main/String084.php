<?php
echo similar_text("hello worlD!", "Hello swapnil") . "<br>";

// Output 
// 7
?>


<?php
echo similar_text("hello worlD!", " hello Hello swapnil") . "<br>";

// Output 
// 8
?>


<?php
echo similar_text("hello worlD!", " hello Hello swapnil", $per) . "<br>";

echo "Percetage: " . $per; 

// Output 
// 8
?>

