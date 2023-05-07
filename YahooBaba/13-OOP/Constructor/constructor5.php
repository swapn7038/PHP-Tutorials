<?php

class person{
   public $name = "No name";
   public $age = 0;

   function __construct($name, $age){
         $this->name = $name;
         $this->age  = $age;
   }

    function show(){
        echo  $this->name . " . " . $this->age . "<br>" ;
    }
}

$p1 = new person("Swapy", 20);
$p2 = new person("Suraj", 21);
$p3 = new person("Aasshay", 10);

// $p1->name = "Swapnil shelke";
// $p1->age = 20;

$p1->show();
$p2->show();
$p3->show();

?>


<?php

// iith aapan ek constructor create kela, tya madhe name ani age chya values pass kelya,
// 

?>