<?php

class person{
   public $name, $age;

    function show(){
        echo  $this->name . "  .  " . "$this->age";
    }
}

// Object created, named as $p1
$p1 = new person();

$p1->name = "Swapnil shelke";
$p1->age = 20;

$p1->show();

?>


<?php

// iith aapan ek class banvala, tyala nav dil, person. person class madhe 2 properties dilya
// manje 2 varialbes dile. 
// 
// khali aapan ek function banvala, show navacha, ani tya function cha kam ahe ki tyala 
// call kelyvar name ani age chi value print houn zail. 

// 

// tya khali aapan ek object create kela. $p1 navacha. 
// $p1->name ne tyala name chi value assign keli.
// $p1->age ne tyala age chi value assign keli.

// tya khali, $p1->show(); hya statement ne function la call kela.


?>