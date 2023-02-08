<?php

class person{
    public $name;
    function show(){
        echo "Your name :" .$this->name . "<br>";
    }
}

$p1 = new person();
$p1->name = "Swapnil shelke";
$p1->show();

$obj1 = new person();
$obj1->name = "Anand Taware";
$obj1->show() ;

?>
