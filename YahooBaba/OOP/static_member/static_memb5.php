<?php

class base{
    public static $name = "Swapnil shelke";
}

    class derived extends base{
        public static function show(){
            echo parent::$name;
        }
    }


$test = new derived();
$test->show();

?>

<?php
?>