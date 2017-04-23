<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/23/2017
 * Time: 7:42 PM
 */
session_start();
if (isset($_SESSION['userID'])) {

} else {
    header('Location: ../public/login.php');
}

include_once '../setting/init.php';
include_once REQUIRES . 'header.php';
include_once LAYOUT . 'admin_layout.php';
include_once CLASSES . 'contact.php';

echo '<br><br>';
$cont = new contact();
echo '<br><div class="container"><table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Contact Person</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead><tbody>';
$logs = json_decode($cont->get_all_contacts());
foreach ($logs as $log) {
    echo '<tr><th ="row">' . $log->contact_id . '</th><td>' . $log->name . '</td><td>' . $log->email . '</td><td>' . $log->message . '</td></tr>';
}
echo '</tbody>
</table></div>';
?>


<?php
include_once REQUIRES . 'footer.php';
?>

