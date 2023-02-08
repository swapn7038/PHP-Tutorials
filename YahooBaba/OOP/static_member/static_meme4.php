<?php

class base{
    public static $name = "Swapnil shelke";

    public static function show(){
        echo self::$name;
    }

    public function __construct($n){
        self::$name = $n;
    }
}

$test = new base("Awesome");
$test->show();

?>

<?php

// iith aapan constructor create kela.
// khali object create kartani, tyala awesome value pass keli

?>