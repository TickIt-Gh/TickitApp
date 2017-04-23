<?php
/**
 * @author VladimirFomene
 *
 **/
//Require the listing class
require_once '../setting/init.php';

require_once("../classes/listing.php");
require_once("buyController.php");
session_start();

class busListingController
{

    /**
     * Display the bus listing page
     */
    public function displayListingPage()
    {
        $busListings = new Listing;
        $this->displayHeader();
        $this->displayBusListing($busListings);
        $this->displayFooter();
    }

    /**
     * Display header of bus listing
     */
    public function displayHeader()
    {
        include_once REQUIRES . 'header.php';
        echo '<title>Tickit - Bus Listing</title>';
        include_once REQUIRES . 'nav_bar.php';
    }

    public function displayFooter()
    {
        echo '</table>
        </div>
      </div>
      <div class="col-md-2">
        &nbsp
      </div>
    </div>';
        require_once REQUIRES . 'footer.php';
    }

    /**
     * This display a formatted table of all bus listing
     * @param $listing listing id
     */
    public function displayBusListing($listing)
    {
        $sessionStatus = 1;
        if (!isset($_SESSION['email']))
            $sessionStatus = 0;

        $listings = $listing->getListings();
        echo '<br><div class="row dashboard" style="margin:50px; margin-bottom: 100px;">
        <!--div class="col-md-2">
            &nbsp
        </div-->
        <div class="col-md-12">
        <!--div class="panel panel-default"-->
            <!-- Default panel contents -->


            <!-- Table -->
            <table class="table">
              <tr>
                <th>Bus Number</th>
                <th>Departure Time</th>
                <th>Departure Date</th>
                <th>Available Seats</th>
                <th>Departure Point</th>
                <th>Destination Point</th>
                <th>Price (GHC)</th>
                <th>Action</th>
    </tr>';
        foreach ($listings as $listing) {
            echo '<tr>
          <td>' . $listing['bus_number'] . '</td>
          <td>' . $listing['depature_time'] . '</td>
          <td>' . $listing['departure_date'] . '</td>
          <td>' . $listing['available_seats'] . '</td>
          <td>' . $listing['departure_point'] . '</td>
          <td>' . $listing['destination_point'] . '</td>
          <td>' . $listing['price'] . '</td>
          <td><form method = "post" action ="">
                <input type="hidden" name="listingID" value="' . $listing['listing_id'] . '" class="btn btn-default btn-primary">
                <input type="hidden" name="session" id="mysession" value = "' . $sessionStatus . '"  class="btn btn-default btn-primary">
                <button name = "buy" type="submit" onclick="validate_buy_form()" class="btn btn-default add-btn btn-primary" data-toggle="modal" data-target="#editModal">BUY
                </button>

              </form>
          </td>
      </tr>';
        }
        echo '</table></div></div>';

        echo '<div id="pop">

            </div>';

    }


}


?>
