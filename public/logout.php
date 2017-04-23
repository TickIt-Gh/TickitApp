<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/19/2017
 * Time: 10:56 AM
 *
 */

/**
 * This function logs user out by destroying session and seting cookies
 */
 function logout(){
       // unset any session variables
       $_SESSION = array();
       // expire cookie
       if (!empty($_COOKIE[session_name()]))
       {
           setcookie(session_name(), "", time() - 42000);
       }
       // destroy session
       session_destroy();
 }

session_start();
logout();
header('Location:login.php');
