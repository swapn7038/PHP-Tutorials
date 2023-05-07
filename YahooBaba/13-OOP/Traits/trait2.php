<?php

trait hii{
    public function hii(){
        echo "Hii from server" . "<br>" ;
    }    
}


trait info{
    public function info(){
        echo "This info function" . "<br>" ;
    }
}

trait byee{
    public function byee(){
        echo "Byee from server" . "<br>" ;
    } 
}

class classOne{
    use hii;
    use info;
    use byee;
}

class classTwo{
    use hii;
    use info;
    use byee;
}

$obj1 = new classOne;
$obj2 = new classTwo;

$obj1->hii();   
$obj1->info();   
$obj1->byee();   

$obj2->hii();   
$obj2->info();   
$obj2->byee();   

?>