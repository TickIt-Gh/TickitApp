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
					<li role="presentation"><a href="itinerary.php">Bus Listing</a></li>
					<li role="presentation"><a href="team.php">Team</a></li>
					<li role="presentation"><a href="contact.php">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a class="active" href="sign_up.php"><span class="fa fa-user-plus"></span> Sign Up</a></li>
				</ul>
			</div>

		</div>
	</nav>



	<div class="row" style="margin:50px; margin-bottom: 100px;">
		<div class="col-md-4">
			&nbsp
		</div>
		<div class="col-md-4" ">
			<form class="form-signin" method="POST" action="#">
				<h2 class="form-signin-heading" style="text-align: center;">Provide Details</h2>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
					<input type="username" id="last_name" class="form-control" placeholder="Last Name" required autofocus
					name="lastname">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
					<input type="username" id="first_name" class="form-control" placeholder="First Name" required autofocus
					name="firstname">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
					<label><small>Date of Birth</small></label>
					<input type="date" name="date_of_birth" class="form-control" id="date_of_birth"><br>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
					<input id= 'password' class="form-control" type="password" placeholder="Password" required name="password">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<input type="email" id="email" class="form-control" placeholder="Email " required name="email">
				</div>
				<br>
				<select class="form-control" id="gender">
					<option value="gender">Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				
				
				<br>

				<div class="error">
					<!--
						PHP CODE FOR ERROR HERE
					-->
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validate_sign_up()">Sign Up</button>
			</form>
		</div>
		<div class="col-md-4">
			&nbsp
		</div>

	</div>




	<footer style="text-align: center; /*padding-top: 50%*/" id="footer">
		<div class="container">
			<div class="custom"  >
				<p>©TickIT Company Ltd. All rights reserved.</p>
				<p>1 University Avenue, PMB CT3321 | Cantonments, Accra, Ghana | Phone: +233.000.000.00</p>
				<p><a href="index.php" rel="alternate">TickIT Company Ltd</a> | <a href="buy.php" rel="alternate">Buy Ticket Instantly</a></p>
			</div>
		</div>

	</footer>
</div>

<script src="js/script.js"></script>
</body>
</html>
