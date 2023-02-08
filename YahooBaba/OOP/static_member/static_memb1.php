<?php

class base{
    public static $name = "Swapnil shelke";

    public function show(){
        echo $this->name;
    }
}

$test = new base();

$test->show();

?>

<?php

// Notice: Accessing static property base::$name as non static

// Warning: Undefined property: base::$name

// varcha program run kelyvar he 2 error bhet til

?>