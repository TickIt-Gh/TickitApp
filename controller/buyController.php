<?php

/**
* @author Job
* @version 1
*/
session_start();

if (!isset($_SESSION))
	header('Location: ../public/login.php');


require_once('../database/Database.php');
require_once('../classes/User.php');
require_once('../classes/listing.php');
require_once('bus_listingController.php');
require('../PHPMailer_5.2.0/class.PHPMailer.php');


if (isset($_POST['buy']))
	reduceBalance();

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
		if ($AvSeats==0)
		{
			$deleteSql = "DELETE from bus_listing WHERE listing_id = $updateID";
			$deleteResult = $veruser->query($deleteSql);
			header("Location: ../pages/itinerary.php");
		}


		$updateSql = "UPDATE bus_listing SET available_seats = $AvSeats WHERE listing_id = $updateID";
		$updateResult = $veruser->query($updateSql);

		if ($updateResult){

			makePayments();
			reduceAmount();
			header("Location: ../pages/itinerary.php");
		}
	}
	else
		echo "Could not reduce";

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
				echo "alert('YOu do not have enough money on your account, press okay to add more money.')"
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

