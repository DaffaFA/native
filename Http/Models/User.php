<?php 

class User {
    public $name;
    public $username;
    public $password;

    public function __construct($name, $username, $password)
    {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }

    public function create() {
        $db = Database::getConnection();
        $request = $db->prepare('INSERT INTO `users` (`name`, `username`, `password`) VALUES ( :name, :username, :password');
        $request = $db->execute([
            'name' => $this->name,
            'username' => $this->username,
            'password' => password_hash($this->password, PASSWORD_BCRYPT)
        ]);
    }
}