<?php
class User {

    public $name = null;
    public $login = null;
    public $password = null;
    public static $countUser = 0;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        ++self::$countUser;
    }

    public function __clone()
    {
        ++self::$countUser;
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