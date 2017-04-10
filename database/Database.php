<?php

/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/10/2017
 * Time: 8:40 PM
 */
class Database
{
    private $conn;
    private $result;

    public function connect()
    {
        $this->conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
        return $this->conn != false;
    }
}