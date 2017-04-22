<?php
session_start();
if (isset($_SESSION['userID'])) {

} else {
    header('Location: ../public/login.php');
}

require_once('../setting/init.php');
require_once('../controller/dashboardController.php');

include_once REQUIRES . 'header.php';

echo '<title>Admin Dashboard</title>';


require_once LAYOUT . 'admin_layout.php';
$dashController = new dashController;
$admin = $dashController->adminSetup();

echo '<div class="row dashboard" style="margin:50px; margin-bottom: 10px;">
    <div class="col-md-2">
        &nbsp
    </div>
    <div class="col-md-8"
    ">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Bus Listing</div>

        <!-- Table -->
        <table class="table" id="dashboard">';

$dashController->displaydashboard($admin);

echo '</table>
            </div>
            </div>
            <div class="col-md-2">
                &nbsp
            </div>
            </div>
            <button type="button" class="btn btn-default add-btn btn-primary" data-toggle="modal" data-target="#myModal">Add Listing
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Listing</h4>
                </div>
                <form method="get" onsubmit="return onAddListing();">
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="bus_number">Bus Number</label>
                        <input placeholder="CE 000 B" type="text" class="form-control" name="bus_number" id="bus_num" tabindex="1" autofocus><br>
                      </div>
                      <div class="form-group">
                        <label for="depature_time">Departure Time</label>
                        <input type="time" name="departure_time" class="form-control" id="time" ><br>
                      </div>
                      <div class="form-group">
                        <label for="depature_date">Departure Date</label>
                        <input type="date" name="departure_date" class="form-control" id="date" ><br>
                      </div>
                      <div class="form-group">
                        <label for="available_seats">Available Seats</label>
                        <input placeholder="Available Seats" class="form-control" type="text" name="available_seats" id="seats"><br>
                      </div>
                      <div class="form-group">
                        <label for="departure_point">Departure Point</label>
                        <input placeholder="Departure Point" class="form-control" type="text" name="departure_point" id="departure"><br>
                      </div>
                      <div class="form-group">
                        <label for="destination_point">Destination Point</label>
                        <input placeholder="Destination Point" class="form-control" type="text" name="destination_point" id="destination"><br>
                     </div>
                     <div class="form-group">
                       <label for="price">Price</label>
                       <input placeholder="Unit Price" class="form-control" type="text" name="listing_price" id="price"><br>
                    </div>
                     <select name="listing_status" id="avail">
            					<option value="Select Availability" selected="selected">Choose Availability</option>
            					<option name="listing_status" value="available">Available</option>
            					<option name="listing_status" value="unavailable">Unavailable</option>
            				</select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btnAdd" type="submit" name="add" value="Add Listing" class="btn btn-default btn-primary">Add Listing</button>
                  </div>
              </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->';
include_once REQUIRES . 'footer.php';
?>
