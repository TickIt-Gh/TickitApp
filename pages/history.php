<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/23/2017
 * Time: 7:38 PM
 */
session_start();
if (isset($_SESSION['userID'])) {

} else {
    header('Location: ../public/login.php');
}

include_once '../setting/init.php';
include_once REQUIRES . 'header.php';
include_once LAYOUT . 'admin_layout.php';
?>


<?php
include_once REQUIRES . 'footer.php';
?>

