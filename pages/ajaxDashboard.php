<?php

require_once('../controller/dashboardController.php');

$dashController = new dashController;
$admin = $dashController->adminSetup();
if(isset($_GET['listingID']) && $_GET['listingID']){
  if($admin->deleteListing($_GET['listingID'])){
    $dashController->displaydashboard($admin);
  }else{
    echo "Ajax Failed";
  }

}

if(isset($_GET['bus_number']) && isset($_GET['available_seats']) && isset($_GET['departure_time'])
 && isset($_GET['departure_date']) && isset($_GET['departure_point'])
 && isset($_GET['destination_point']) && isset($_GET['listing_status']) && isset($_GET['listing_price'])
&& isset($_GET['add'])){
  $listing = new Listing;
  $listing->setBusNumber($_GET['bus_number']);
  $listing->setAvailableSeats((int) $_GET['available_seats']);
  $listing->setDepartureTime($_GET['departure_time']);
  $listing->setDepartureDate($_GET['departure_date']);
  $listing->setDeparturePoint($_GET['departure_point']);
  $listing->setDestinationPoint($_GET['destination_point']);
  $listing->setListingStatus($_GET['listing_status']);
  $listing->setPrice((float) $_GET['listing_price']);
  $listing->setManagedBy($admin->getAdminID());
  if($admin->addListing($listing)){
    $dashController->displaydashboard($admin);
  }else{
    echo "Ajax Failed";
  }
}




?>
