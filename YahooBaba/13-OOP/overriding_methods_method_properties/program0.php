<?php

class base{
    public $name = "Parent class";
}

class derived extends base{
    public $name = "Child class";
}

$test = new base();
// test object based on base class.
echo $test->name;

$test1 = new derived();
// test2 object based on parent class.
echo $test1->name;

?>