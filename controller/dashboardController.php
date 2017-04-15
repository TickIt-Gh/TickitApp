<?php
/**
*@author VladimirFomene
*
**/
//require admin class to display dashboard
require_once("../classes/admin.php");
class dashController{
  public function displayDashboardPage(){
    displayHeader();
    displaydashboard();
    displayFooter();
  }

  public function displayHeader(){
    include_once REQUIRES . 'header.php';
  }

  public function displaydashboard(){
    $admin = new Admin;
    $listings = $admin->getListings();
    foreach($listings as $listing){
      echo '<tr>
          <td>'.$listing['bus_number'].'</td>
          <td>'.$listing['depature_time'].'</td>
          <td>'.$listing['departure_date'].'</td>
          <td>'.$listing['available_seats'].'</td>
          <td>'.$listing['departure_point'].'</td>
          <td>'.$listing['destination_point'].'</td>
          <td>'.
              '<form>
                <input type="hidden" name="listingID" value="'.$listing['listing_id'].'" class="btn btn-default btn-primary">
                <input type="submit" name="edit" value="Edit" class="btn btn-default btn-primary">
              </form>
          </td>
          <td>'.
          '<form>
            <input type="hidden" name="listingID" value="'.$listing['listing_id'].'" class="btn btn-default btn-primary">
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
    }
  }

  public function handlelistingUpdate(){
    if(isset($_GET['update'])){
      updateListing($_GET['listingID']);
    }
  }


}

  $dashController = new dashController;
  $dashController->handlelistingEdit();
  $dashController->handlelistingUpdate();
  $dashController->handlelistingDelete();







?>
