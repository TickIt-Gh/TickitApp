<?php

/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/10/2017
 * Time: 8:40 PM
 */

include_once '../setting/init.php';
include_once DATABASES . 'database_info.php';

class Database
{

    public $conn; //connection to database
    public $result; //query result

    /**
     * Connects to database
     * @return bool true if connection is successful
     */
    public function connect()
    {
        $this->conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
        if (mysqli_connect_errno()) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Query database
     * @param sql to execute
     * @return return true or false
     */

    public function query($sql)
    {
        if (!$this->connect()) {
            return false;
        }
        //echo("Error description: " . mysqli_error($this->conn));
        return ($this->result = mysqli_query($this->conn, $sql)) != false;
    }

    /**
     * this method fetches result from the database
     * @return array|bool|null result form database
     */
    public function fetch()
    {
        if ($this->result == false) {
            return false;
        }
        return mysqli_fetch_assoc($this->result);
    }

    /**
     * this method fetches all records from a database table
     * @return array|bool|null result form database
     */
    public function fetchAll()
    {
        if ($this->result == false) {
            return false;
        }
        return mysqli_fetch_all($this->result, MYSQLI_ASSOC);
    }


    /**
     * this return result in json format
     * @return bool|string result in json format from query
     */
    public function fetch_json()
    {
        if ($this->result == false) {
            return false;
        }
        return json_encode(mysqli_fetch_all($this->result, MYSQLI_ASSOC));
    }

    /**
     * this methods counts the num of rows returned
     * @return bool|int false if not result was return or number of data from database
     */
    public function count_rows()
    {
        if ($this->result == false) {
            return false;
        } else {
            return mysqli_num_rows($this->result);
        }
    }


}

?>
