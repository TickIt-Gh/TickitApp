<?php

require_once('../controller/dashboardController.php');

$dashController = new dashController;
$admin = $dashController->adminSetup();

//Deleting a particular listing via ajax
if (isset($_GET['listingID']) && $_GET['listingID'] && isset($_GET['delete'])) {
    if ($admin->deleteListing($_GET['listingID'])) {
        $dashController->displaydashboard($admin);
    } else {
        echo "Ajax Failed";
    }

}

//adding a new listing via ajax
if (isset($_GET['bus_number']) && isset($_GET['available_seats']) && isset($_GET['departure_time'])
    && isset($_GET['departure_date']) && isset($_GET['departure_point'])
    && isset($_GET['destination_point']) && isset($_GET['listing_status']) && isset($_GET['listing_price'])
    && isset($_GET['add'])
) {
    $listing = new Listing;
    $listing->setBusNumber($_GET['bus_number']);
    $listing->setAvailableSeats((int)$_GET['available_seats']);
    $listing->setDepartureTime($_GET['departure_time']);
    $listing->setDepartureDate($_GET['departure_date']);
    $listing->setDeparturePoint($_GET['departure_point']);
    $listing->setDestinationPoint($_GET['destination_point']);
    $listing->setListingStatus($_GET['listing_status']);
    $listing->setPrice((float)$_GET['listing_price']);
    $listing->setManagedBy($admin->getAdminID());
    if ($admin->addListing($listing)) {
        $dashController->displaydashboard($admin);
    } else {
        echo "Ajax Failed";
    }
}

//edit listing on admin dashboard via ajax
if (isset($_GET['listingID']) && $_GET['listingID'] && isset($_GET['edit'])) {
    echo $admin->editListing($_GET['listingID']);
}

//updating a particular listing through ajax
if (isset($_GET['bus_number']) && isset($_GET['available_seats']) && isset($_GET['departure_time'])
    && isset($_GET['departure_date']) && isset($_GET['departure_point'])
    && isset($_GET['destination_point']) && isset($_GET['listing_status']) && isset($_GET['listing_price'])
    && isset($_GET['update']) && isset($_GET['listingID'])
) {
    $listing = new Listing;
    $listing->setListingId($_GET['listingID']);
    $listing->setBusNumber($_GET['bus_number']);
    $listing->setAvailableSeats((int)$_GET['available_seats']);
    $listing->setDepartureTime($_GET['departure_time']);
    $listing->setDepartureDate($_GET['departure_date']);
    $listing->setDeparturePoint($_GET['departure_point']);
    $listing->setDestinationPoint($_GET['destination_point']);
    $listing->setListingStatus($_GET['listing_status']);
    $listing->setPrice((float)$_GET['listing_price']);
    $listing->setManagedBy($admin->getAdminID());
    if ($admin->UpdateListing($listing)) {
        $dashController->displaydashboard($admin);
    } else {
        echo "Ajax Failed";
        echo "hello";
    }
}
?>
