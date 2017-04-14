<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/14/2017
 * Time: 8:15 PM
 *
 */
include_once '../setting/init.php';
include_once CONTROLLER . 'functions.php';


$error = '';
$email = '';


if (isset($_POST['login'])) {
    login();
}

function validate_login()
{
    global $error, $email;
    $is_ok = true;
    if (isset($_POST['email']) and validate_email($_POST['email'])) {
        $email = format_data($_POST['email']);
    } else {
        $error = 'Wrong login credentials';
        $is_ok = false;
    }

    if (isset($_POST['password'])) {

    } else {
        $error = 'Wrong login credentials';
        #$password_error = 'Password must contain an Upper Case Letter, Lower Case, a number and a symbol and should be 6 or more characters long';
        $is_ok = false;
    }

    if ($is_ok) {
        return true;
    }
    return false;
}

function login()
{

    global $error;
    if (validate_login()) {
        /*
         *Check user credentials
         */
        $email = format_data($_POST['email']);

        require_once DATABASES . 'Database.php';
        $db = new Database();
        $sql = "SELECT * FROM user WHERE (email = '$email')";
        $db->query($sql);
        $result = $db->fetch();
        if ($result) {
            if (password_verify($_POST['password'], $result['password'])) {
                header('Location: ../pages/');
            } else {
                $error = 'Wrong login credentials';
            }
        } else {
            $error = 'Wrong login credentials';
        }
    }
}

?>