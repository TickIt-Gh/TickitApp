<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | TickIT</title>
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
					<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>

		</div>
	</nav>



	<div class="row" style="margin:50px; margin-bottom: 100px;">
		<div class="col-md-4">
			&nbsp
		</div>
		<div class="col-md-6" ">
			<form class="form-signin" method="POST" action="#">

				<h2 class="form-signin-heading">Travel Details</h2>

					<select class="form-control">
					    <option value="one">From</option>
					    <option value="two">Accra</option>
					    <option value="three">Kumasi</option>
					    <option value="four">Tamale</option>
					    <option value="five">Togo</option>
					</select><br>

					<select class="form-control">
					    <option value="one">To</option>
					    <option value="two">Accra</option>
					    <option value="three">Kumasi</option>
					    <option value="four">Tamale</option>
					    <option value="five">Togo</option>
					</select> <br>

					<select class="form-control">
					    <option value="one">Depature Time</option>
					    <option value="two">6am</option>
					    <option value="three">10am</option>
					    <option value="four">2pm</option>
					    <option value="five">6pm</option>
					</select><br>

					<!-- Large modal -->
					<button type="button" class="btn btn-primary btn-block " data-toggle="modal" data-target=".bs-example-modal-lg" >Buy</button>

					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <h1 class="text-center">Thank You For Using <br> <br> TickIT</h1>
					      <h3 class="text-center"><em>Your Tocken is <strong>4wwesw4</strong></em></h3>
					    </div>
					  </div>
					</div>

			</form>
		</div>
		<div class="col-md-4">
			&nbsp
		</div>

	</div>



       <div style=" padding-top:100% ">
	<footer style="text-align: center; padding-top: 50%" id="footer">
		<div class="container">
			<div class="custom"  >
				<p>©TickIT Company Ltd. All rights reserved.</p>
				<p>1 University Avenue, PMB CT3321 | Cantonments, Accra, Ghana | Phone: +233.000.000.00</p>
				<p><a href="index.php" rel="alternate">TickIT Company Ltd</a> | <a href="book_ticket" rel="alternate">Ticket Booking</a></p>
			</div>
		</div>

	</footer>
	</div>


</body>
</html>
