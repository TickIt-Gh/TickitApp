<!DOCTYPE html>
<html>
<head>
	<title>Login | TickIT</title>
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
					<li><a class="active" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
					<li><a href="sign_up.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
				</ul>
			</div>

		</div>
	</nav>



	<div class="row" style="margin:50px; margin-bottom: 100px;">
		<div class="col-md-4">
			&nbsp
		</div>
		<div class="col-md-4" ">
			<form class="form-signin" method="POST" action="admin.php">
				<h2 class="form-signin-heading" style="text-align: center;">Please sign in</h2>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					<input type="email" id="email" class="form-control" placeholder="Email" required autofocus
					name="email">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
					<input class="form-control" id="password" type="password" placeholder="Password" required name="password">
				</div>
				<br>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember_me"> Remember me
					</label>
					<label style="padding-left: 70%">
						<a href= "">forgot password?</a>
					</label>
				</div>
				<br>
				<div class="error">
					<!--
						PHP CODE FOR ERROR HERE
					-->
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validate_login()">Sign in</button>
			</form>
		</div>
		<div class="col-md-4">
			&nbsp
		</div>

	</div>




	<footer style="text-align: center; padding-top: 10%" id="footer">
		<div class="container">
			<div class="custom"  >
				<p>©TickIT Company Ltd. All rights reserved.</p>
				<p>1 University Avenue, PMB CT3321 | Cantonments, Accra, Ghana | Phone: +233.000.000.00</p>
				<p><a href="index.php" rel="alternate">TickIT Company Ltd</a> | <a href="book_ticket" rel="alternate">Ticket Booking</a></p>
			</div>
		</div>

	</footer>


	<script type="text/javascript">

		function validate_email(email) {
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email.value);
		}

		function validate_password(password) {
			var re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
			return re.test(password.value);
		}


		function validate_login(){
			var email = document.getElementById('email');
			var password = document.getElementById('password');
			if (email != null && password != null){
				if (validate_email(email)){
					if (validate_password(password))
						alert('Successful Login in');
					else
						alert('Password must be aleast 8 character, one symbol, atleast an upper case, a lower case and a number');
				}else{
					alert('Please provide all details');
				}
			}else{
				alert('Provide email and password')
			}

		}

	</script>


</body>
</html>
