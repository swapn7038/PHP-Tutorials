<?php

class base {
    public $name = "Parent class";
    public function calc($a, $b){
       return $a * $b;
    }
}

class derived extends base {
   public $name = "Child class";
   public function calc($a, $b){
    return $a + $b;
 }
}

$test = new base();
// test nava cha object, base class shi related ahe.
echo $test->calc(5, 10);

$test2 = new derived();
// test2 is an object, based on derived class.
echo $test2->calc(5, 10);


?>

<?php

// here derived is name of tha class, and it is inheriting properties from base class. 
// aapan iith same navac function 2 thickani use kel, yalach manhtat method overwriting

// jar koni vicharala ki method ani properties overwriting manje kay ?
// ==>  method ani properties overwriting manje, same navache function aapan base class ani derived 
// ==>  class madhe use kele.

?>