<?php
/**
*@author VladimirFomene
*
**/
//require admin class to display dashboard
require_once("../classes/admin.php");

  //set admin session for the dashboard
  session_start();
  $_SESSION['managed_by'] = 1;
class dashController{
  public function displayDashboardPage(){
    displayHeader();
    displaydashboard();
    displayFooter();
  }

  public function displayHeader(){
    include_once REQUIRES . 'header.php';
  }

  public function adminSetup(){
    $admin = new Admin;
    $admin->setAdminID($_SESSION['managed_by']);
    return $admin;
  }

  public function displaydashboard($admin){
    $listings = $admin->getListings();
    echo '<tr>
        <th>Bus Number</th>
        <th>Departure Time</th>
        <th>Departure Date</th>
        <th>Available Seats</th>
        <th>Departure Point</th>
        <th>Destination Point</th>
        <th>Price (GHC)</th>
        <th>Availability</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>';
    foreach($listings as $listing){
      echo '<tr>
          <td>'.$listing['bus_number'].'</td>
          <td>'.$listing['depature_time'].'</td>
          <td>'.$listing['departure_date'].'</td>
          <td>'.$listing['available_seats'].'</td>
          <td>'.$listing['departure_point'].'</td>
          <td>'.$listing['destination_point'].'</td>
          <td>'.$listing['price'].'</td>
          <td>'.$listing['listing_status'].'</td>
          <td>'.
              '<form>
                <input type="hidden" name="listingID" value="'.$listing['listing_id'].'" class="btn btn-default btn-primary">
                <input type="submit" name="edit" value="Edit" class="btn btn-default btn-primary">
              </form>
          </td>
          <td>'.
          '<form>
            <input type="hidden" id="listingID" name="listingID" value="'.$listing['listing_id'].'" class="btn btn-default btn-primary">
            <input type="submit" name="delete" value="Delete" class="btn btn-default btn-primary">
          </form>
          </td>
      </tr>';
    }
  }

  public function displayFooter(){
    require_once REQUIRES . 'footer.php';
  }

  public function handlelistingEdit(){
    if(isset($_GET['edit'])){
      editListing($_GET['listingID']);
    }
  }

  public function handlelistingDelete(){
    if(isset($_GET['delete'])){
      deleteListing($_GET['listingID']);
      displaydashboard();
    }
  }

  public function handlelistingUpdate(){
    if(isset($_GET['update'])){
      updateListing($_GET['listingID']);
    }
  }

  public function handlelistingAdds($admin){
    if(isset($_GET['add'])){
      $listing = new Listing;
      $listing->setBusNumber($_GET['bus_number']);
      $listing->setAvailableSeats((int) $_GET['available_seats']);
      $listing->setDepartureTime($_GET['departure_time']);
      $listing->setDepartureDate($_GET['departure_date']);
      $listing->setDeparturePoint($_GET['departure_point']);
      $listing->setDestinationPoint($_GET['destination_point']);
      $listing->setDepartureDate($_GET['departure_date']);
      $listing->setListingStatus($_GET['listing_status']);
      $listing->setPrice((float) $_GET['listing_price']);
      $listing->setManagedBy($admin->getAdminID());
      echo $admin->addListing($listing);
    }
  }


}

  $dashController = new dashController;
  $admin = $dashController->adminSetup();
  $dashController->handlelistingEdit();
  $dashController->handlelistingUpdate();
  $dashController->handlelistingDelete();
  $dashController->handlelistingAdds($admin);







?>
