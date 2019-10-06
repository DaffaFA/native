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

}