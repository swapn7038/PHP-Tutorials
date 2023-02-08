<?php

class person{
   public $name = "No name";
   public $age = 0;
   public $lastname = "No last name";
   public $address = "No address";

   function __construct($name, $age, $lastname, $address){
         $this->name = $name;
         $this->age  = $age;
         $this->lastname = $lastname;
         $this->address = $address;

   }

    function show(){
        echo  $this->name . $this->age . "<br>" . $this->lastname .  $this->address;
    }
}

$p1 = new person("Swapy", 20, "Shelke", "Waluj");
$p2 = new person("Suraj", 21, "Mete", "Bajajnagar");
$p3 = new person("Aasshay", 10, "Patil", "Satara");

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