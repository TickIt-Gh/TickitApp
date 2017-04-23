<?php
  require_once '../setting/init.php';
  require_once('../controller/buyController.php');
  require_once('../controller/bus_listingController.php');  
  require_once LAYOUT . 'admin_layout.php';
  require_once('../stripeSettings/config.php');

  echo "<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="TickIT Account"
          data-amount="5000"
          data-locale="auto"></script>
</form>";

  //Sets up the bus listing controller
  $listingBoard = new busListingController;

  //Displays the bus listing board for clients
  $listingBoard->displayListingPage();


?>
