<?php

class Database {
    private $connection;

    public function __construct()
    {
        if ( !isset( $this->connection ) ) {
            $this->connection = mysqli_connect('localhost', 'root', '', 'native');
        }

        return self::$connection;
    }

    public function __clone()
    {
        //
    }

    // public function getConnection()
    // {
    //     if ( !isset( $this->connection ) ) {
    //         $this->connection = mysqli_connect('localhost', 'root', '', 'native');
    //     }

    //     return $this->connection;
    // }

    // public function test()
    // {
    //     echo "fuck you !";
    // }
}