<?php

class base{
    public static $name = "Swapnil shelke";

    public static function show(){
        echo self::$name;
    }
}

// $test = new base();
// $test->show();

// static keyword ani self:: add kelyvar aaplalya object create karnyachi ani tyala 
// method sobat call karyachi garaz rahat nahi.

echo base::$name;

// echo base::$name;  hya line ne aapan object create n karta tyala class chya baher print kel.

// aata aapan show hya aaplya method la baher use karu

base::show();

// varti dilyalya statement ne fmethod chya values pan aapan class baher access karu shakto.

?>

<?php
?>