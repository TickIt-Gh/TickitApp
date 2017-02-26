<!DOCTYPE html>
<html>
<!--@uthor Brenda Mboya.This is the code for the contact page our the TICKIT application-->
<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--adding the css file for this contact page-->
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
<script href="js/bootstrap.min.js"></script>
<style type="text/css">
	body{
	background-color:white;
}
h1{
	text-align: center;
}
div{
	text-align: center;
}
</style>

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
				</ul>
			</div>

		</div>
	</nav>



<!--adding my php code to validate user input-->
<?php
//declaring my variables
$nam="";
$mail="";
$message="";
//checking if the user has filled the fields oc clicking the button
if(isset($_POST['submit'])){
	if(!empty($_POST['name'])){
		$nam=$_POST['name'];
	}
	else{
		echo "kindly type your name";
		echo "<br>";
	}
	if(!empty($_POST['email'])){
		$mail=$_POST['email'];
	}
	else{
		echo 'kindly type your email address';
		echo "<br>";
	}
	if(!empty($_POST['message'])){
		$message=$_POST['message'];

	}
	else{
		echo 'kindly type your message';
		echo "<br>";
	}

}

?>

<div >
	<form method="post" action="">
	<br><br>
		  <br><br>
		 <input type="text" name="name" size="50" placeholder="your name" value="<?php echo $nam?>" <br> <br>
		 <br><br>
		<input type="text" name="email" size="50" placeholder="your email" value="<?php echo $mail?>"><br> <br>
		 <br><br>
		<textarea  rows="10" cols="50" name="message" placeholder="your message here" value="<?php echo $message?>"></textarea><br><br>
		<input type="submit" class="btn btn-success" name="submit" value="SUBMIT">

	</form>
	</div>
	<footer style="text-align: center; padding-top: 50%" id="footer">
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
