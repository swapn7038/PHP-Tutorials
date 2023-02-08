<?php

interface parent1{
    function calc($a, $b);
}

interface parent2{
    function sub($c, $d);
}

class childClass implements parent1, parent2{
    public function calc($a, $b){
        echo $a * $b . "<br>";
    }

    public function sub($x, $y){
       echo $x - $y;
    }
}

$test = new childClass();

$test->calc(10, 20);
$test->sub(10, 20);

?>