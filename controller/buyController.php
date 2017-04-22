<?php

/**
* @author Job
* @version 1
*/

require_once('../database/Database.php');
require_once('../classes/User.php');
require_once('../classes/listing.php');
require_once('bus_listingController');


if (isset($_POST['buy'])) 
	reduceBalance();

// $myUser = new User;
// $veruser = new Database;


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
	//$seatsSql = "SELECT * FROM bus_listings WHERE listing_id = $_POST['buy']";

	$seatsResults = $veruser->query("SELECT * FROM bus_listings");

	if ($seatsResults)
	{
		$row = $veruser->fetch();
		$AvSeats=$row['available_seats'];
		$AvSeats =$AvSeats-1;
		$updateSql = "UPDATE bus_listings SET available_seats = $AvSeats WHERE listing_id = $row['listing_id']";
		header("Location: ../pages/itinerary.php");
	}
	else
		echo "Could not reduce";;

}