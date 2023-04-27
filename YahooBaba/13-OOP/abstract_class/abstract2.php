<?php

abstract class parentClass{

    public $name; 

    abstract protected function calc($a, $b);
    // this is our abstract function.
}

 class childClass extends parentClass{

    public function calc($c, $d){
      echo $c + $d; 
    }
}

$test = new childClass();

$test->calc(5, 10);

?>


<?php

?>