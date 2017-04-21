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
                <button type="submit" class="btn btn-default add-btn btn-primary" data-toggle="modal" data-target="#editModal">Edit
                </button>
              </form>
              <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Listing</h4>
                  </div>
                  <form method="get" onsubmit="updateListing();">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="bus_number">Bus Number</label>
                          <input placeholder="CE 000 B" type="text" class="form-control" name="bus_number" id="bus_number" tabindex="1" autofocus><br>
                        </div>
                        <div class="form-group">
                          <label for="depature_time">Departure Time</label>
                          <input type="time" name="departure_time" class="form-control" id="departure_time" ><br>
                        </div>
                        <div class="form-group">
                          <label for="depature_date">Departure Date</label>
                          <input type="date" name="departure_date" class="form-control" id="departure_date" ><br>
                        </div>
                        <div class="form-group">
                          <label for="available_seats">Available Seats</label>
                          <input placeholder="Available Seats" class="form-control" type="text" name="available_seats" id="available_seats"><br>
                        </div>
                        <div class="form-group">
                          <label for="departure_point">Departure Point</label>
                          <input placeholder="Departure Point" class="form-control" type="text" name="departure_point" id="departure_point"><br>
                        </div>
                        <div class="form-group">
                          <label for="destination_point">Destination Point</label>
                          <input placeholder="Destination Point" class="form-control" type="text" name="destination_point" id="destination_point"><br>
                       </div>
                       <div class="form-group">
                         <label for="price">Price</label>
                         <input placeholder="Unit Price" class="form-control" type="text" name="listing_price" id="listing_price"><br>
                      </div>
                       <select name="listing_status" id="availability">
                        <option value="Select Availability" selected="selected">Choose Availability</option>
                        <option name="listing_status" value="available">Available</option>
                        <option name="listing_status" value="unavailable">Unavailable</option>
                      </select>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <input type="submit" name="edit" value="Edit Listing" class="btn btn-default btn-primary">
                    </div>
                </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </td>
          <td>'.
          '<input type="submit" onclick="onDeleteListing(this)" name="delete" value="Delete" id="'.$listing['listing_id'].'" class="btn btn-default btn-primary">
          </td>
      </tr>';
    }
  }

  public function displayFooter(){
    require_once REQUIRES . 'footer.php';
  }

  public function handlelistingEdit($admin){
    if(isset($_GET['edit'])){
      echo $admin->editListing($_GET['listingID']);
    }
  }

  public function handlelistingDelete($admin){
    if(isset($_GET['delete'])){
      if($admin->deleteListing($_GET['listingID'])){
        $this->displaydashboard();
      }else{
        echo "Ajax Failed";
      }

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
      $admin->addListing($listing);
    }
  }


}

  $dashController = new dashController;
  $admin = $dashController->adminSetup();
  $dashController->handlelistingEdit($admin);
  $dashController->handlelistingUpdate();
  //$dashController->handlelistingAdds($admin);







?>
