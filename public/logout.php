<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/19/2017
 * Time: 10:56 AM
 *
 */
session_start();
session_destroy();
header('Location:login.php');