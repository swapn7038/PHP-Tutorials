<?php

class base{
    public static $name = "Swapnil shelke";

    public static function show(){
        echo self::$name;
    }

    public function __construct(){
        self::show();
    }
}

$test = new base();
$test->show();

?>

<?php

// iith aapan constructor create kel

// varti dilelya code ne 2 veles nav print hoil.
// ekada constructor mul ani 2nd time, method la call kelya mul

?>