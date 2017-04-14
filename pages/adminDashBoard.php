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
            <button type="button" class="btn btn-default add-btn btn-primary" aria-haspopup="true" aria-expanded="false">Add Listing
            </button>
            <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->';

  include_once REQUIRES . 'footer.php';
?>
