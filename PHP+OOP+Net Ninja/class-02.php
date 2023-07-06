<?php

class User{
    public $username = "ryu";
    public $email = "ryu@gmail.com";

    public function addFriend(){
        return "Added a new friend";
    }
}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend();

?>

