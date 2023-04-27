<?php

$str = "Hello";

if(md5($str) == "8b1a9953c4611296a827abf8c47804d7"){
    echo "Successfully find"; 
} else {
    echo "Not found";
}


?>