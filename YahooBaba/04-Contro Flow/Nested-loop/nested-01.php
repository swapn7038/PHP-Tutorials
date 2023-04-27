
<?php
// 1.   Nested loop ka use jab hame data tabular form me dikhana hota he tab karete he.
// 2. Outer loop -> rows
// 3. Inner loop -> columns

for($a = 1; $a <= 100; $a = $a + 10){
    for($b = $a; $b < $a + 10; $b++){
        echo $b . " ";
    }
    echo '<br>';
}

?>