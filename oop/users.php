<?php

function __autoload($class){
    include "./classes/" . $class . ".php";
}


$user0 = new User("john", "login_login", "erfewrewrwe");
$user1 = new User("sergey", "login_sergey", "erfewrewrwe11");
$user2 = new User("ivan", "login_ivan", "erfewrewrwe33");

//echo $user0->showInfo();
//echo $user1->showInfo();
//echo $user2->showInfo();

$user = new SuperUser("johnSuper", "login_loginSuper", "erfewrewrweSuper", "admin");
//echo $user->showInfo();

//echo 'users - '. User::$countUser . "<br>";
//echo 'admin users - '. SuperUser::$countUserAdmin . "<br>";