<?php

/**
* @author Job MWwesigwa
* @version 1
* This file makes sure after buying, the necesary checks and reductions are made 
*/

/**
*Including the required classes 
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



//If the buyer button is cliked
if (isset($_POST['buy']) )
	reduceBalance();

/**
*Method makes all checks of the seats
*and the session variables
*/
function reduceBalance()
{
	//1 when logged in, 0 not logged in 
	$sessionStatus = 1;
  	if (!isset($_SESSION['email']))
    	$sessionStatus = 0;

	//redirect to login
    if ($sessionStatus==0)
		header('Location: ../public/login.php');

	else{
		//db object

		$veruser = new Database;

		$id = $_POST['listingID'];
		$seatsSql = "SELECT * FROM bus_listing WHERE listing_id = $id";
		$seatsResults = $veruser->query($seatsSql);

		if ($seatsResults)
		{
			$row = $veruser->fetch();
			$AvSeats=$row['available_seats'];

			//reducing number of seats
			$AvSeats =$AvSeats-1;
			$updateID = $row['listing_id'];

			//if no seats available, change status of the listing to unavailable
			if ($AvSeats==0)
			{
				$updateSql = "UPDATE bus_listing SET listing_status = 'unavailable' WHERE listing_id = $updateID";
			}

			//update number of seats 
			else{
				$updateSql = "UPDATE bus_listing SET available_seats = $AvSeats WHERE listing_id = $updateID";
			}	
			$updateResult = $veruser->query($updateSql);

			//populate the payment table and reduce the amount in the user's account  using function
			if ($updateResult){

				reduceAmount();
				makePayments();

				//reloading the page
				header("Location: ../pages/standardUserBoard.php");
			}
		}
		else
			echo "Could not reduce";
	}
}

/**
* methode populates the payment table by geting attribute values from other tables
*/

function makePayments()
{
	//db object
	$veruser = new Database;

	//other attribute vales required
	$listingId = $_POST['listingID'];
	$userID = $_SESSION['userID'];
	$today = date("Y-m-d H:i:s");

	//getting the price
	$priceSql = "SELECT * FROM bus_listing WHERE listing_id = $listingId";
		$priceResults = $veruser->query($priceSql);

		if ($priceResults)
		{
			$priceRow = $veruser->fetch();
			$amount = $priceRow['price'];
		}

	//inserting into the table
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

/**
* Responsible for monetary transaction
* if user has insurficient balance, they are redirected to the listing page and alerted by a pop up
* reduces the account balance 
*/
function reduceAmount()
{
	//db object
	$veruser = new Database;
	$userID = $_SESSION['userID'];
	$id = $_POST['listingID'];

	//getting the account balance details
	$userSql = "SELECT * FROM user WHERE userID = $userID";
	$userResults = $veruser->query($userSql);

	if ($userResults)
	{
		$row = $veruser->fetch();
		$balance=$row['balance'];

		//getting the price of the listing
		$priceSql = "SELECT * FROM bus_listing WHERE listing_id = $id";
		$priceResults = $veruser->query($priceSql);
<<<<<<< HEAD



=======
		
>>>>>>> 6059ce331a1a494778ca5af50010f898f206753a
		if ($priceResults)
		{
			$priceRow = $veruser->fetch();
			$price = $priceRow['price'];

			//Reducing account balance 
			if ($price > $balance){
				echo "alert('You do not have enough money on your account, press okay to add more money.')";
				header("Location: ../stripeSettings");
			}

			$balance= $balance-$price;

			//Updating account balance
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
