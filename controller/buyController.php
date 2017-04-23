<?php

/**
* @author Job
* @version 1
*/

require_once('../database/Database.php');
require_once('../classes/User.php');
require_once('../classes/listing.php');
require_once('bus_listingController.php');
require('../PHPMailer_5.2.0/class.PHPMailer.php');


session_start();

if (!isset($_SESSION))
	header('Location: ../public/login.php');

if (isset($_POST['buy']))
	reduceBalance();
// if (isset($_GET['listingID'])) 
// 	reduceBalanceAjax();

// $myUser = new User;
 //$veruser = new Database;


// $User->userid = $_SESSION['userID'];

// $sql = "SELECT * FROM user WHERE (userID = '$User->userid')";
// $result=$veruser->query($sql)

// if ($result) {
// 	$myUser->$email=$result['email'];

// $clientsql = "SELECT * FROM client WHERE (userID = '$User->userid')";
// $clientResult=$veruser->query($clientsql)

// if ($result) {
// 	$fname=$result['firstName'];

// function sendEmail()
// {
//     $receiver = $myUser->$email;
//     $subject = "Thank you! your tocken";
//     $Message = "Dear".$firstName."Thank you for Using TickIT. Here is your tocken: ".$_GET['tocken']." <br><br> safe journey<br>TickIT team";
//     $heades = "From: sales@tickit.com" 
//     mail($reciever,$subject,$tmessage,$header);
// }

function checkBalance()
{
    
}

function reduceBalance()
{

	$veruser = new Database;
	$id = $_POST['listingID'];
	$seatsSql = "SELECT * FROM bus_listing WHERE listing_id = $id";
	$seatsResults = $veruser->query($seatsSql);

	if ($seatsResults)
	{
		$row = $veruser->fetch();
		$AvSeats=$row['available_seats'];
		$AvSeats =$AvSeats-1;
		$updateID = $row['listing_id'];
		$updateSql = "UPDATE bus_listing SET available_seats = $AvSeats WHERE listing_id = $updateID";
		$updateResult = $veruser->query($updateSql);

		if ($updateResult){
			makePayments();
			header("Location: ../pages/itinerary.php");
		}
		else
			echo "Not updated";
	}
	else
		echo "Could not reduce";

}

// function reduceBalanceAjax()
// {
// 	$veruser = new Database;
// 	$id = $_POST['listingID'];
// 	$seatsSql = "SELECT * FROM bus_listing WHERE listing_id = $id";
// 	$seatsResults = $veruser->query($seatsSql);

// 	if ($seatsResults)
// 	{
// 		$row = $veruser->fetch();
// 		$AvSeats=$row['available_seats'];

// 		$AvSeats =$AvSeats-1;
// 		$updateID = $row['listing_id'];
// 		$updateSql = "UPDATE bus_listing SET available_seats = $AvSeats WHERE listing_id = $updateID";
// 		$updateResult = $veruser->query($updateSql);

// }
// }

function makePayments()
{
	$veruser = new Database;
	$listingId = $_POST['listingID'];
	$userID = $_SESSION['userID'];
	$today = date("Y-m-d H:i:s");

	$paymentSql = "INSERT INTO payment (listing_id,user_id,date) values ($listingId,$userID,'$today')";

	$paymentResults = $veruser->query($paymentSql);

	if ($paymentResults)
		return true;
	else
	{
		echo "Could not be inserted";
		return false;
	}
}


function sendMail(){
	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.example.com;mail2.example.com";  // specify main and backup server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "jswan";  // SMTP username
	$mail->Password = "secret"; // SMTP password

	$mail->From = "from@example.com";
	$mail->FromName = "Mailer";
	$mail->AddAddress("mwesigwajob1@gmail.com", "Josh Adams");
	$mail->AddAddress("job.mwesigwa@ashesi.edu.gh");                  // name is optional
	$mail->AddReplyTo("info@example.com", "Information");

	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Here is the subject";
	$mail->Body    = "This is the HTML message body <b>in bold!</b>";
	$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	if(!$mail->Send())
	{
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	}

	echo "Message has been sent";
}