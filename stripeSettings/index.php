<?php
require_once('config.php'); ?>
// get the current URL
<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="TickIT Account"
          data-amount="5000"
          data-locale="auto"></script>
</form>