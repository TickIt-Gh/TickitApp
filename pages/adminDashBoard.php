<?php
require_once('../controller/dashboardController.php');
require_once('../setting/init.php');
include_once REQUIRES . 'header.php';

  echo '<title>Admin Dashboard</title>';


 require_once REQUIRES . 'nav_bar.php';


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
        <table class="table">
            <tr>
                <th>Bus Number</th>
                <th>Departure Time</th>
                <th>Departure Date</th>
                <th>Available Seats</th>
                <th>Departure Point</th>
                <th>Destination Point</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>';
     $dashController = new dashController;
     $dashController->displaydashboard();

      echo '</table>
            </div>
            </div>
            <div class="col-md-2">
                &nbsp
            </div>
            </div>
            <button type="button" class="btn btn-default add-btn btn-primary" aria-haspopup="true" aria-expanded="false">Add
            </button>';

  include_once REQUIRES . 'footer.php';
?>
