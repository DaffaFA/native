<?php

class Database {
    // public $connection;

    public function __construct()
    {
        // if ( !isset( $this->connection ) ) {
        //     $this->connection = new mysqli('localhost', 'root', '', 'native');
        // }

        // return self::$connection;
    }

    public function __clone()
    {
        //
    }

    public function getConnection()
    {
        $connection = new mysqli('localhost', 'root', '', 'native');

        return $connection;
    }

}