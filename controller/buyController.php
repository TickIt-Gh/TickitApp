<?php

/**
* @author Job
* @version 1
*/

require_once('../database/Database.php');

if (isset($_POST['buy'])) 
	checkBalance();

function sendEmail()
{
    $receiver = "somebody@example.com";
    $subject = "My subject";
    Message = "Hello world!";
    $heades = "From: sales@tickit.com" 
    mail($reciever,$subject,$tmessage,$header);
}

function checkBalance()
{
    $veruser = new Database;
}