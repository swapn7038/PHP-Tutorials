<?php 

class person{
    public $name, $age, $address, $phoneNo, $class, $id, $f_name, $m_name;

    function __construct($name, $age, $address, $phoneNo, $class, $id, $f_name, $m_name){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->phoneNo = $phoneNo;
        $this->class = $class;
        $this->id = $id;
        $this->f_name = $f_name;
        $this->m_name = $m_name;
    }
    function showDetails(){
        echo $this->name . "<br>";
        echo $this->age . "<br>";
        echo $this->address . "<br>";
        echo $this->phoneNo . "<br>";
        echo $this->class . "<br>";
        echo $this->id . "<br>";
        echo $this->f_name . "<br>";
        echo $this->m_name . "<br>";
    }
}

$object1 = new person("Swapnil", 20, "Waluj",9595959595, "BCA", 21, "Baban", "Padma");
$object2 = new person("Swapnil", 20, "Waluj",9595959595, "BCA", 21, "Baban", "Padma");
$object3 = new person("Swapnil", 20, "Waluj",9595959595, "BCA", 21, "Baban", "Padma");
$object4 = new person("Swapnil", 20, "Waluj",9595959595, "BCA", 21, "Baban", "Padma");
$object5 = new person("Swapnil", 20, "Waluj",9595959595, "BCA", 21, "Baban", "Padma");
$object6 = new person("Swapnil", 20, "Waluj",9595959595, "BCA", 21, "Baban", "Padma");

// $object1->name = "Swapnil";
// $object1->age = 20;
// $object1->address = "Waluj";
// $object1->phoneNo = 9595959595;
// $object1->class = "BCS";
// $object1->id = 21;
// $object1->f_name = "Baban";
// $object1->m_name = "Padma";

$object1->showDetails();
$object2->showDetails();
$object3->showDetails();
$object4->showDetails();
$object5->showDetails();
$object6->showDetails();

?>