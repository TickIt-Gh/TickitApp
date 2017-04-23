<?php



  require_once '../setting/init.php';
  require_once('../controller/bus_listingController.php');  
  //require_once LAYOUT . 'admin_layout.php';


  //Sets up the bus listing controller
  $listingBoard = new busListingController;

  //Displays the bus listing board for clients
  $listingBoard->displayListingPage();


?>
