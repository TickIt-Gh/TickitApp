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

    if (isset($_POST['password']) and validate_password($_POST['password'])) {

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
    global $email;
    if (validate_login()) {
        /*
         *Check user credentials
         */

        header('Location: sign_up.php');
    }

}

?>