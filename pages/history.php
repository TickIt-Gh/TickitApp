<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/23/2017
 * Time: 7:38 PM
 */
session_start();
if (isset($_SESSION['userID'])) {

} else {
    header('Location: ../public/login.php');
}

include_once '../setting/init.php';
include_once REQUIRES . 'header.php';
include_once LAYOUT . 'admin_layout.php';
include_once DATABASES . 'Database.php';

$db = new Database();
$db->query("select payment_id,client.firstName,client.lastName, user.email, bus_listing.bus_number from (payment,client,user, bus_listing) where bus_listing.listing_id = payment.listing_id and payment.user_id = user.userID and user.userID = client.userID");
$db_data = json_decode($db->fetch_json());


echo '<br><br><br><br><div class="container"><table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Bus Booked</th>
    </tr>
  </thead><tbody>';
foreach ($db_data as $log) {
    echo '<tr><th ="row">' . $log->payment_id . '</th><td>' . $log->firstName . '</td><td>' . $log->lastName . '</td><td>' . $log->email . '</td><td>' . $log->bus_number . '</td></tr>';
}
echo '</tbody>
</table></div>';
?>

?>


<?php
echo '<br><br><br>';
include_once REQUIRES . 'footer.php';
?>

