<!DOCTYPE html>
<html>
<!--@uthor Brenda Mboya.This is the code for the contact page our the TICKIT application-->
<head>
	<title>Contact Us | TickIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
					<li role="presentation"><a href="index.php">Home</a></li>
					<li role="presentation"><a href="itinerary.php">Bus Listing</a></li>
					<li role="presentation"><a href="team.php">Team</a></li>
					<li role="presentation"><a class="active" href="contact.php">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="sign_up.php"><span class="fa fa-user-plus"></span> Sign Up</a></li>
				</ul>
			</div>

		</div>
	</nav>




	<div class="row" style="margin:50px; margin-bottom: 100px;">
		<div class="col-md-4">
			&nbsp
		</div>
		<div class="col-md-6" >
			<form class="form-signin" method="post" action="#" >
				<div>
					<input type="text" id="name" class="form-control" placeholder="Your name" required autofocus name="name">
				</div>
				<br>
				<div>
					<input type="email" class="form-control" id= "email" size="50" placeholder="Your email" required autofocus>
				</div>
				<br>
				<div>
					<textarea  rows="10" class="form-control" cols="50" id="comment" placeholder="Your message here"></textarea>
				</div>
				<br>
				<input type="submit" class="btn btn-primary btn-block" name="submit" value="SUBMIT" onclick="validate_contact_form()">

			</form>
		</div>
	</div>

	<footer style="text-align: center; padding-top: 00.1%" id="footer">
		<div class="container">
			<div class="custom"  >
				<p>©TickIT Company Ltd. All rights reserved.</p>
				<p>1 University Avenue, PMB CT3321 | Cantonments, Accra, Ghana | Phone: +233.000.000.00</p>
				<p><a href="index.php" rel="alternate">TickIT Company Ltd</a> | <a href="book_ticket" rel="alternate">Ticket Booking</a></p>
			</div>
		</div>

	</footer>
	<!--including the javascript-->
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

