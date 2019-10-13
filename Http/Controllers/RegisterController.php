<?php 


class RegisterController {
    public $name;
    public $username;
    public $password;

    public function __construct()
    {
        if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
            $this->name = $_POST['name'];
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
        }
    }

    public function register()
    {
        $user = new User($this->name, $this->username, $this->password);
        $user->create();
    }
}