<?php

class SuperUser extends User {

    public $role = null;
    public static $countUserAdmin = 0;

    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$countUserAdmin;
        --parent::$countUser;
    }

    public function showInfo()
    {
        $result = parent::showInfo();
        return $result. "role - {$this->role}";
    }
    
}