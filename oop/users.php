<?php

class User {

    public $name = null;
    public $login = null;
    public $password = null;

    public function showInfo()
    {
        return "name - {$this->name}, login - {$this->login}, password - {$this->password}";
    }
}

$user0 = new User();
$user0->name = "john";
$user0->login = "login_login";
$user0->password = "erfewrewrwe";

$user1 = new User();
$user1->name = "sergey";
$user1->login = "login_sergey";
$user1->password = "erfewrewrwe11";

$user2 = new User();
$user2->name = "ivan";
$user2->login = "login_ivan";
$user2->password = "erfewrewrwe33";

echo $user0->showInfo();
echo $user1->showInfo();
echo $user2->showInfo();
