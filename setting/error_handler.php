<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/11/2017
 * Time: 11:13 PM
 */


/**
 * This defines how errors should be handled in all pages
 */
set_error_handler('handle_all_errors', E_ALL);


/**
 * This function logs all errors encountered by users of our site
 * @param $error_type type of error
 * @param $error_string error message
 * @param $error_file file error occurs in
 * @param $error_line line that error occurs
 */
function handle_all_errors($error_type, $error_string, $error_file, $error_line)
{
    include_once DATABASES . 'Database.php';
    $database = new Database();
    $database->connect();
    $conn = $database->conn;
    $error_type = (int)$error_type;
    $error_string = mysqli_real_escape_string($conn, $error_string);
    $error_file = mysqli_real_escape_string($conn, $error_file);
    $error_line = (int)$error_line;
    $sql = "INSERT INTO errors (error_id, error_time, error_type, error_string, error_file, error_line) VALUES (NULL, now(), '$error_type', '$error_string', '$error_file', '$error_line')";
    $database->query($sql);

}

?>