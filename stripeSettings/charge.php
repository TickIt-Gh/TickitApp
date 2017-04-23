<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'mwesigwajob1@gmail.com',
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 5000,
      'currency' => 'GHC'
  ));

  echo '<<div id="editModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><h1 class="text-center">Thank You For Using <br> <br> TickIT</h1><h3 class="text-center"><em>Your Tocken is <strong id="tocken"></strong></em></h3><br> <h5 class="text-center"><em>It has been sent to your email</em></h5><br> <button type="button" class="btn btn-default center-block" data-dismiss="modal">Close</button></div> </div> </div>'>';
?>