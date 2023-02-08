<?php

class person{
   public $name = "No name";
   public $age = 0;

    function show(){
        echo  $this->name . " . " . $this->age;
    }
}

$p1 = new person();

// $p1->name = "Swapnil shelke";
// $p1->age = 20;

$p1->show();

?>


<?php

// iith aapan value set nahi keli, default value name variable chi no name hoti. 
// tich value print houn zail.
// 

?>