<!DOCTYPE html>
<html>
<head>
	<title>Welcome to TickIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--style type="text/css">

		p{
			font-style: justify;
		} -->
	<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role='navigation'>
		<div class="container">
			<div class="navbar-header"><a href="index.php" class="navbar-brand navbar-link"><i class="glyphicon glyphicon-phone"></i>TickIT</a>
				<button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="nav navbar-nav navbar-left">
					<li role="presentation" class="active"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="itinerary.php">Bus Listing</a></li>
					<li role="presentation"><a href="https://teamtickit.wordpress.com/">Team</a></li>
					<li role="presentation"><a href="contact.php">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="sign_up.php"><span class="fa fa-user-plus"></span> Sign Up</a></li>
				</ul>
			</div>

		</div>
	</nav>


	<div class="jumbotron hero">
		<div class="container">
			<div class="row">
				<div class='col-md-4 col-md-push-7 phone-preview'>
					<div class="iphone-mockup">
						<img class="img-responsive" src="img/apple-iphone-5s.svg" alt="Phone Here">
						<div class="screen"></div>
					</div>
				</div>
				<div class='col-md-6 col-md-pull-3 get-it'>
					<h1>TickIT App</h1>
					<p align="justify"> Welcome to TickUP Official Web Application.
						Book a  ticket with us or create a account</p>
						<p>
							<a class= 'btn btn-primary' href="buy.php">Buy Now!</a>
							<a class= 'btn btn-success' href="sign_up.php">Sign Up</a>
						</p>
					</div>

				</div>
			</div>
		</div>

		<div class="section-colored text-center">

			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<h2>TickIT Ticketing System: Your most reliable ticketing company</h2>
						<p style="text-align=justify"> An easy to use ticketing system that enables you to book a ticket with VIP coaches to any destination . You can book a ticket, make your payments from wherever you are and just show up for your journey. Travelling has been made easy and its getting better...
							<a href="https://teamtickit.wordpress.com/about/">read more</a>
						</p>
						<hr>
					</div>
				</div>

			</div>

		</div>

		<div class="container colored" style="padding :5px">
			<div class="row well" style="padding:5px">
				<div class="col-lg-8 col-md-8">
					<h4>We are here to serve!</h4>
				</div>
				<div class="col-lg-4 col-md-4">
					<a class="btn btn-lg btn-primary pull-right" href="contact.php">Contact Us!</a>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<div class="col-lg-12" style="color: white;background-color: white;">
			&nbsp
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
