<?php

class employee{
    public $name;
    public $age;
    public $salary;

    // function __construct($n, $a, $s){
    //       $this->name = $n;
    //       $this->age = $a;
    //       $this->salary = $s;
    // }

    function __construct(){
        echo "Employee constructor";
    }

    function info(){
        echo "<h3>Employ Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
     }

     class manager extends employee{
        function __construct(){
            echo "Manager constructor";
      }
}

$e1 = new employee();

$e1 = new manager();

$e1->info();

?>