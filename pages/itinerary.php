<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
<title>Listing</title>

<?php
include_once REQUIRES . 'nav_bar.php';
?>

<div class="row dashboard" style="margin:50px; margin-bottom: 100px;">
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
                <th>#</th>
                <th>Bus Number</th>
                <th>Departure Time</th>
                <th>Departure Date</th>
                <th>Departure Point</th>
                <th>Destination Point</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>GT 74 B</td>
                <td>11:45am</td>
                <td>26/02/2017</td>
                <td>Accra</td>
                <td>Kumasi</td>
                <td><a class="btn btn-primary" href="buy.php">BUY</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>GT 547 C</td>
                <td>11:45pm</td>
                <td>27/02/2017</td>
                <td>Tamale</td>
                <td>Kumasi</td>
                <td><a class="btn btn-primary" href="buy.php">BUY</a></td>
            </tr>
        </table>

    </div>
</div>
<div class="col-md-2">
    &nbsp
</div>

</div>

<?php
include_once REQUIRES . 'footer.php';
?>
