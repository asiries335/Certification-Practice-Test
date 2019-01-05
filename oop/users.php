<?php

class User {

    public $name = null;
    public $login = null;
    public $password = null;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function __destruct()
    {
        echo "{$this->login} - deleted";
    }

    public function showInfo()
    {
        return "name - {$this->name}, login - {$this->login}, password - {$this->password}";
    }
}

class SuperUser extends User {
    public $role = null;

    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    public function showInfo()
    {
        $result = parent::showInfo();
        return $result. "role - {$this->role}";
    }
}

$user0 = new User("john", "login_login", "erfewrewrwe");
$user1 = new User("sergey", "login_sergey", "erfewrewrwe11");
$user2 = new User("ivan", "login_ivan", "erfewrewrwe33");

echo $user0->showInfo();
echo $user1->showInfo();
echo $user2->showInfo();

$user = new SuperUser("johnSuper", "login_loginSuper", "erfewrewrweSuper", "admin");
echo $user->showInfo();