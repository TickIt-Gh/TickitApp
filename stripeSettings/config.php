<?php
require_once('../vendor/autoload.php');
$stripe = array(
 "secret_key"      => "sk_test_2qcjpq5Pi1rldGhhyboOF20R",
 "publishable_key" => "pk_test_CoDZOWIgN6gp1cjdbK8roz1j"
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>