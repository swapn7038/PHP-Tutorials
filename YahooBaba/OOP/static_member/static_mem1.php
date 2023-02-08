<?php

class personal{
    public $name = "Swapnil shelke";
    public function show(){
        echo $this->name;
    }
}

$test = new personal();
$test->show();
// $test->$name;

// ==================

// class personal{
//     public $name = "Swapnil";
//     public function data(){
//         echo $this->$name;
//     }
// }

// $object = new personal();
// $object->data();
// $object->$name;

?>