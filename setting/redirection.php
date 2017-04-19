<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/19/2017
 * Time: 12:13 PM
 */

if (isset($_SESSION)) { //check if session is set
    if (isset($_SESSION['is_admin'])) {
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
    if ($user_type === 'yes') {
        header('Location: ../pages/adminDashBoard.php');
    } elseif ($user_type === 'no') {
        header('Location: ../pages/standardUserBoard.php');
    } else {
        header('Location: ../public/login.php');
    }
}