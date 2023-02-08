<?php

class base {
    protected static $name = "Swapnil";

    public function show(){
        echo static::$name;
    }
}

class derived extends base {
    protected static $name = "Shelke";
}

$test1 = new derived();
$test1->show();



?>


<?php

// :: hya operater la aapan "scope resolution" operator manto.

// iith aapan fakt line no. 7 madhe self chya jagi static keyword cha use kela

?>