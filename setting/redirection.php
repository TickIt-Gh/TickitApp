<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/19/2017
 * Time: 12:13 PM
 */

require_once '../setting/init.php';
/**
 * Redirect user to their respective layouts
 */
if (isset($_SESSION)) { //check if session is set
    if (isset($_SESSION['is_admin'])) {
        //echo 'Here' . '<br>';
        //echo $_SESSION['is_admin'];
        redirect_user($_SESSION['is_admin']);
    } else {
        header('Location: ../public/login.php');
    }
} else {
    header('Location: ../public/login.php');
}

/**
 * this function redirects user to their respective layouts
 * @param $user_type user type
 */
function redirect_user($user_type)
{
    if (strcasecmp($user_type, 'yes') == 0) {
        header('Location: ../pages/adminDashBoard.php');
    } elseif (strcasecmp($user_type, 'no') == 0) {
        header('Location: ../pages/standardUserBoard.php');
    } else {
        header('Location: ../public/login.php');
    }
}
