<?php
/**
 * Created by PhpStorm.
 * User: razak and Brenda Mboya
 * Date: 4/19/2017
 * Time: 12:17 PM
 */
session_start();

if (isset($_SESSION['userID'])) {
require_once '../setting/init.php';
  //require_once('../controller/buyController.php');
  require_once('../controller/bus_listingController.php');  
 // require_once LAYOUT . 'admin_layout.php';

  //Sets up the bus listing controller
  $listingBoard = new busListingController;

  //Displays the bus listing board for clients
  $listingBoard->displayListingPage();



} else {
    header('Location: ../public/login.php');
}


include_once '../setting/init.php';
include_once REQUIRES . 'header.php';
include_once LAYOUT . 'normal_user_layout.php';


?>

<?php
include_once REQUIRES . 'footer.php';
?>