<?php

namespace App\Model;


use mysqli;
class DB
{
    public $connect;

    public function __construct()
    {
        $dbname = "login";
        $servername = "localhost";
        $username = "matin";
        $password = "1234";
        $this->connect = new mysqli($servername, $username, $password, $dbname);

        if ($this->connect->connect_error) {
            die("Connection failed: " . $this->connect->connect_error);
        }
        echo "Connected successfully";
    }
}