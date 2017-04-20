<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/19/2017
 * Time: 12:17 PM
 */
session_start();
if (isset($_SESSION['userID'])) {

} else {
    header('Location: ../public/login.php');
}