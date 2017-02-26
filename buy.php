<!DOCTYPE html>
<html>
<head>
	<title>Buy | TickIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Required Scripts and links for designing-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!--Navigation bar-->
	<nav class="navbar navbar-default navbar-fixed-top" role='navigation'>
		<div class="container">

			<!--Navigation bar -->
			<div class="navbar-header"><a href="index.php" class="navbar-brand navbar-link"><i class="glyphicon glyphicon-phone"></i>TickIT</a>
				<button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>

			<!--Menues on the left side-->
			<div class="collapse navbar-collapse" id="navcol-1">

				<ul class="nav navbar-nav navbar-left">
					<li role="presentation"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="itinerary.php">Bus Listing</a></li>
					<li role="presentation"><a href="contact.php">Contact Us</a></li>
					<li role="presentation"><a href="team.php">Team</a></li>
				</ul>

				<!--Menues on the left side-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="sign_up.php"><span class="fa fa-user-plus"></span> Sign Up</a></li>
				</ul>

			</div>

		</div>
	</nav>


	<div class="row" style="margin:50px; margin-bottom: 100px;">

		<!--Creating space on the left of the page content-->
		<div class="col-md-4">
			&nbsp
		</div>

		<!--Getting User Information-->
		<div class="col-md-6" ">
			<form class="form-signin" method="POST" action="#">

				<h2 class="form-signin-heading text-center">Travel Details</h2>

				<div>
					<input type="text" id="name" class="form-control" placeholder="Your name" required autofocus name="name">
				</div><br>

				<div>
					<input type="email" class="form-control" id= "email" size="50" placeholder="Your email" required autofocus>
				</div><br>

				<div>
					<input type="text" id="tel" class="form-control" placeholder="Tel- (+233503548654)" required autofocus name="tel">
				</div><br>

				<!-- Large modal -->
				<button type="button" class="btn btn-primary center-block btn-lg btn-block" onclick="validate_contact_buy()" data-toggle="modal" data-target=".bs-example-modal-lg" >Buy
				</button>

				<!--Dive to have the modal information-->
				<div id="pop">
					
				</div>

				<!--including the javascript-->
				<script type="text/javascript" src="js/script.js"></script>	

			</form>
		</div>

		<!--Creating empty space at the page content-->
		<div class="col-md-4">
			&nbsp
		</div>

	</div>


		<!--The Footer of every page-->
       <div style=" padding-top:1% ">
	<footer style="text-align: center; padding-top: 1%" id="footer">
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
