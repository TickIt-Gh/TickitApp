<!DOCTYPE html>
<html>
<!--@uthor Brenda Mboya.This is the code for the contact page our the TICKIT application-->
<head>
<meta charset="utf-8"/>
	<title>TICKIT CONTACT</title>
	<!--adding the css file for this contact page-->
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
<script href="js/bootstrap.min.js"></script>
<style type="text/css">
	body{
	background-color:#5858da;
}
h1{
	text-align: center;
}
div{
	text-align: center;
}
</style>
</head>
<body >
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
<h1 >Contact us</h1>
<div >
	<form method="post" action="">
		 YOUR NAME <br><br>
		 <input type="text" name="name" size="50" placeholder="your name" value="<?php echo $nam?>" <br> <br>
		YOUR EMAIL <br><br>
		<input type="text" name="email" size="50" placeholder="your email" value="<?php echo $mail?>"><br> <br>
		YOUR MESSAGE <br><br>
		<textarea  rows="10" cols="50" name="message" placeholder="your message here" value="<?php echo $message?>"></textarea><br><br>
		<input type="submit" class="btn btn-success" name="submit" value="SUBMIT">

	</form>
	</div>>
</body>
	
</html>