<?php

interface parent1{
    function calc($a, $b);
}

interface parent2{
    function sub($x, $y);
}

class childClass implements parent1, parent2{
   public function calc($a, $b){
    echo $a + $b . "<br>";
   }
   
   public function sub($c, $d){
    echo $c - $d;
   }
}

$test = new childClass();

$test->calc(5, 10);
$test->sub(5, 10);

?>

<?php

// php interfaces allows us to specify what methods 
// a class hould implement.

// Interfaces make it easy to use a variety of different
// classes in the same way. 

// When one or mre classes use the same interface, it is 
// referred as "polymorphism"

?>

<?php

// interface ani abstract class same astat, pan kahi farak ahe
// 1. interfaces madhe aapan properties (variables) add nahi karu shakat, abstract class madhe properties add karu shakto
// 2. interface madhe methods public pahije, ani abstract class madhe methods public kiva protected astat.
// 3. inteface madhlya methods abstract astat, manhun tyana aapan implement nahi karu shakat, ani abstract keyword chi pan garaz naste.
// 4.  class interface implement karu shakatat, ani inherit pan karu shaktat.


// https://www.w3schools.com/php/php_oop_interfaces.asp

?>