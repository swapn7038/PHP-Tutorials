<?php
class demo{
    private $p = "helllo class";

    // public function
    public function show(){
        echo $this->p;
    }
}
// create object
$obj = new demo();
// call object
$obj->show();
?>