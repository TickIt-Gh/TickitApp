<?php
/**
*@author VladimirFomene
*
**/
//require admin class to display dashboard
require_once("../classes/admin.php");

  //start session to access admin id
  session_start();
class dashController{
  public function displayDashboardPage(){
    displayHeader();
    displaydashboard();
    displayFooter();
  }

  //displays header for our dashboard
  public function displayHeader(){
    include_once REQUIRES . 'header.php';
  }

  //create an admin object using a session id
  public function adminSetup(){
    $admin = new Admin;
    $admin->setAdminID($_SESSION['userID']);
    return $admin;
  }


  //displays table for the dashboard
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
              '<input style="margin-left: 0px" type="submit" id="'.$listing['listing_id'].'"  onclick="onEditListing(this)" name="edit" value="Edit" class="btn btn-default add-btn btn-primary" data-toggle="modal" data-target="#editModal">
              <div display="inline-block" class="modal fade" id="editModal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Listing</h4>
                  </div>
                  <form method="get" onsubmit="return onUpdateListing();">
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
                      <input type="hidden" name="listingID" id="listing_id">
                      <input type="submit" name="update" value="Update Listing" id="btnUpdate" class="btn btn-default btn-primary">
                    </div>
                </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </td>
          <td>'.
          '<input type="submit" onclick="onDeleteListing(this)" name="delete" value="Delete" id="'.$listing['listing_id'].'" class="btn btn-default btn-danger">
          </td>
      </tr>';
    }
  }

  //Displays footer for admin dashboard
  public function displayFooter(){
    require_once REQUIRES . 'footer.php';
  }

}







?>
