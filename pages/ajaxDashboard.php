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




?>
