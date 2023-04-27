<?php

class person{
   public $name, $age;

    function show(){
        echo  $this->name . $this->age;
    }
}

$p1 = new person();

// $p1->name = "Swapnil shelke";
$p1->age = 20;

$p1->show();

?>


<?php

// line number 13 ani 14 madhe aapan name ani age chya values set kelya, kay hoil jar aapan tya 
// values set nahi kelya, kiva tith ekach value set keli. 

// jar aapan name chi set keleli value kadhun takli tar aaplyala fakt age chich value bhetal.
// age kadhun takli tar fakt name chich value bhetal.

?>