<?php

trait hello{
    public function sayHello(){
       echo "You are awesome";
    }
}

class className_One {
   use hello;
}

class className_Two {
   use hello;
}

$object1 = new className_One();
$object2 = new className_Two();

$object1->sayHello();
$object2->sayHello();

?>