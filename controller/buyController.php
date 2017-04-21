<?php

/**
* @author Job
* @version 1
*/

require_once('../database/Database.php');
require_once('../classes/User.php');

if (isset($_POST['buy'])) 
	sendEmail();

$myUser = new User;
$veruser = new Database;


$User->userid = $_SESSION['userID'];

$sql = "SELECT * FROM user WHERE (userID = '$User->userid')";
$result=$veruser->query($sql)

if ($result) {
	$myUser->$email=$result['email'];

$clientsql = "SELECT * FROM client WHERE (userID = '$User->userid')";
$clientResult=$veruser->query($clientsql)

if ($result) {
	$fname=$result['firstName'];

function sendEmail()
{
    $receiver = $myUser->$email;
    $subject = "Thank you! your tocken";
    Message = "Dear".$firstName."Thank you for Using TickIT. Here is your tocken: ".$_GET['tocken']." <br><br> safe journey<br>TickIT team";
    $heades = "From: sales@tickit.com" 
    mail($reciever,$subject,$tmessage,$header);
}

function checkBalance()
{
    
}