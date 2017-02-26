<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard | TickIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" role='navigation'>
		<div class="container">
			<div class="navbar-header"><a href="index.php" class="navbar-brand navbar-link"><i class="glyphicon glyphicon-phone"></i>TickIT</a>
				<button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="nav navbar-nav navbar-left">
					<li role="presentation"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="buy.php">Buy</a></li>
					<li role="presentation"><a href="team.php">Team</a></li>
					<li role="presentation"><a href="about.php">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="sign_up.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
				</ul>
			</div>

		</div>
	</nav>
  <div class="row dashboard" style="margin:50px; margin-bottom: 100px;">
    <div class="col-md-2">
      &nbsp
    </div>
    <div class="col-md-8" ">
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
            <td><button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false">BUY</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>GT 547 C</td>
            <td>11:45pm</td>
            <td>27/02/2017</td>
            <td>Tamale</td>
            <td>Kumasi</td>
            <td><button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false">BUY</button></td>
        </tr>
      </table>
    </div>
    </div>
    <div class="col-md-2">
      &nbsp
    </div>

  </div>

  <footer id="footer" style="text-align: center;">
    <div class="container">
      <div class="custom"  >
        <p>©TickIT Company Ltd. All rights reserved.</p>
        <p>1 University Avenue, PMB CT3321 | Cantonments, Accra, Ghana | Phone: +233.000.000.00</p>
        <p><a href="index.php" rel="alternate">TickIT Company Ltd</a> | <a href="book_ticket" rel="alternate">Ticket Booking</a></p>
      </div>
    </div>

  </footer>


</body>
</html>
