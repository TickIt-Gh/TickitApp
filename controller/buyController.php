<?php

/**
* @author Job
* @version 1
*/

require_once('../database/Database.php');
require_once('../classes/User.php');
require_once('../classes/listing.php');
require_once('bus_listingController.php');
require("../PHPMailer/PHPMailerAutoload.php");



/**
* @param $email to which you want to send message
* @param $message to be send to user.
**/
function sendEmail($email, $message){
  //Initialize the email object
  $mail = new PHPMailer;
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; // or 465
  $mail->IsHTML(true);
  $mail->Username = "tickit.booking@gmail.com";
  $mail->Password = "razak2018";
  $mail->SetFrom("tickit.booking@gmail.com");
  $mail->Subject = "Tickit Booking Info";
  $mail->Body = $message;
  $mail->AddAddress($email);

   if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      echo "Message has been sent";
   }
}



if (isset($_POST['buy']) )
	reduceBalance();


function reduceBalance()
{
	$sessionStatus = 1;
  if (!isset($_SESSION['email']))
    $sessionStatus = 0;

   if ($sessionStatus==0)
		header('Location: ../public/login.php');
	else{
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
		if ($AvSeats==0)
		{
			$deleteSql = "UPDATE bus_listing SET listing_status = 'unavailable' WHERE listing_id = $updateID";
			$deleteResult = $veruser->query($deleteSql);
			makePayments();
			reduceAmount();
			header("Location: ../pages/standardUserBoard.php");
		}


		$updateSql = "UPDATE bus_listing SET available_seats = $AvSeats WHERE listing_id = $updateID";
		$updateResult = $veruser->query($updateSql);

		if ($updateResult){

			makePayments();
			reduceAmount();
			header("Location: ../pages/standardUserBoard.php");
		}
	}
	else
		echo "Could not reduce";
}
}


function makePayments()
{
	$veruser = new Database;
	$listingId = $_POST['listingID'];
	$userID = $_SESSION['userID'];
	$today = date("Y-m-d H:i:s");

	$priceSql = "SELECT * FROM bus_listing WHERE listing_id = $listingId";
		$priceResults = $veruser->query($priceSql);

		if ($priceResults)
		{
			$priceRow = $veruser->fetch();
			$amount = $priceRow['price'];
		}

	$paymentSql = "INSERT INTO payment (listing_id,user_id,date,amount) values ($listingId,$userID,'$today',$amount)";

	$paymentResults = $veruser->query($paymentSql);

	if ($paymentResults)
		return true;
	else
	{
		echo "Could not be inserted";
		return false;
	}
}

function reduceAmount()
{
	$veruser = new Database;
	$userID = $_SESSION['userID'];
	$id = $_POST['listingID'];

	$userSql = "SELECT * FROM user WHERE userID = $userID";
	$userResults = $veruser->query($userSql);

	if ($userResults)
	{
		$row = $veruser->fetch();
		$balance=$row['balance'];

		$priceSql = "SELECT * FROM bus_listing WHERE listing_id = $id";
		$priceResults = $veruser->query($priceSql);



		if ($priceResults)
		{
			$priceRow = $veruser->fetch();
			$price = $priceRow['price'];

			if ($price > $balance){
				echo "alert('You do not have enough money on your account, press okay to add more money.')";
				header("Location: ../stripeSettings");
			}

			$balance= $balance-$price;

			$updateSql = "UPDATE user SET balance = $balance WHERE userID = $userID";
			$updateResult = $veruser->query($updateSql);
			if ($updateResult)
				return true;
			else
			{
				echo "Could not be inserted";
				return false;
	}
		}

	}

}
