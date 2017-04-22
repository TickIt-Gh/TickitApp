<?php

/**
* @author Job
* @version 1
*/

require_once('../database/Database.php');
require_once('../classes/User.php');
require_once('../classes/listing.php');
require_once('bus_listingController.php');

if (!isset($_SESSION))
	header('Location: ../public/login.php');

// if (isset($_GET['buy'])) 
// 	reduceBalance();
if (isset($_GET['listingID'])) 
	reduceBalanceAjax();

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
	$seatsResults = $veruser->fetch_json($seatsSql);

	if ($seatsResults)
	{
		$row = $veruser->fetch();
		$AvSeats=$row['available_seats'];

		$AvSeats =$AvSeats-1;
		$updateID = $row['listing_id'];
		$updateSql = "UPDATE bus_listing SET available_seats = $AvSeats WHERE listing_id = $updateID";
		$updateResult = $veruser->query($updateSql);

		if ($updateResult)
			header("Location: ../pages/itinerary.php");
		else
			echo "Not updated";
	}
	else
		echo "Could not reduce";

}

function reduceBalanceAjax()
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

}

