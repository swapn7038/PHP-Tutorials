<!-- An abstract class is a mix between an interface and a class. It can define 
    functionality as well as interface
-->

<!-- Classes extending an abstract class must implement all of the 
     abstract methods defined in the abstract class.
-->

<!-- Abstract class is declared tha same way as classes with the addition of th 'abstract' 
      keyword
-->

<!-- Abstract classes syntax -->
<!-- 
<?php
abstract class MyAbstract{
  // method
}

// and is attached to a class using the 'extends' keyword.
// class MyClass extends MyAbstract
{
    // class methods 
}

?> -->


<!-- abstract class examlpe -->

<?php

abstract class a {
    // declare abstract method
    abstract public function dis1();
    abstract public function dis2();
}

class b extends a {

    public function dis1(){
        echo "Method 1";
    }

    public function dis2(){
        echo "Method 2";
    }

}

$obj = new b();
$obj->dis1();
$obj->dis2();

?>