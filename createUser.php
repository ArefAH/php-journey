<?php
class User {
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function checkPassword($password) {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{12,}$/', $password);
    }
    
}

?>