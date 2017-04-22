<?php

/*
*@author Job Mwesigwa 
*@version one
*/
require_once('../database/Database.php');
//echo "I am proud";
if (isset($_POST['signup'])) 
	validregister();

/*
* Validates every field in the register page
* calls a method to check if user name already exists
*/
function validregister()
{
	//Array to take in errors 
    $errorMessages = [];


		//Validating first name 
    if (!isset($_POST['firstname']) || $_POST['firstname'] === '')
        $errorMessages[] ="The fist name shouldn't be empty";
    
    else 
		if (!preg_match('/^[A-Za-z]*$/', $_POST['firstname']))
        	$errorMessages[] ="DO not include any symbol in the first name";


    //Validating Last name
    if (!isset($_POST['lastname']) || $_POST['lastname'] === '') 
        $errorMessages[] ="The last name shouldn't be empty";

    else
		if (!preg_match('/^[A-Za-z]*$/', $_POST['lastname']))
        	$errorMessages[] = "DO not include any symbol in the last name";


    //Validating date
    if (!isset($_POST['date_of_birth']) || $_POST['date_of_birth'] === '')
        $errorMessages[] ="Please select date";


    //Validating Email
    if (!isset($_POST['email']) || $_POST['email'] === '') 
        $errorMessages[] = "Your email field shouldn't be empty";

    else
		if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $_POST['email']))
        	$errorMessages[] = "Your email is not right";

    //Validating the password
    if (!isset($_POST['password']) || $_POST['password'] === '') 
        $errorMessages[] ="The password shouldn't be empty";

    else 
		if (!(preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/', $_POST['password'])) || (strlen($_POST['password'])) < 6)
				$errorMessages[]="Make sure you have Caps, Lowercase, numbers and a symbol in you password";
   	

    //Validating gender
    if (!isset($_POST['gender']) || $_POST['gender'] === '' || $_POST['gender'] == 'gender')
        $errorMessages[] ="Please select atleast one gender";

    
    //user name exits
    if (empty($errorMessages))
    	checkemail($_POST['email']);
    
    else
    	printerrors($errorMessages);
}

/*
 *@param an array of errors
 *prints errors in the error array
 */ 
function printerrors($errors)
{
	foreach ($errors as  $error) {
		echo $error."<br><br>";
	}
	exit;
}

/*
 *@param email to be checked 
 *Checks if email is in the database
/*/
function checkemail($email)
{
	//Database object
	$obj = new Database;
	//write sql
	$sqlemail = "SELECT * from user where email =  '$email'";
	//execute querry
	$user = $obj->query($sqlemail);

	//if the return table is empty
	if ($user && empty($obj->fetch()))
		registernewuser();
	else{
		echo "We already have a user with this email";
		exit;
	}
}

/*
 *Fuction inserts registered user into the database
 */
function registernewuser()
{
	$fname = $_REQUEST['firstname'];
	$lname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$pw = $_REQUEST['password'];
	$dob = $_REQUEST['date_of_birth'];
	$gender = $_REQUEST['gender'];
	$tel = $_REQUEST['tel'];

	$pwdhash = password_hash($pw, PASSWORD_DEFAULT);

	//create instance of database class
	$reguser = new Database; 	 

	$sql = "INSERT INTO user (email, password)
	VALUES ('$email','$pwdhash') ";

	$dbexec = $reguser->query($sql);
	$IDsql = $reguser->query("SELECT userID FROM user WHERE email = '$email'");


	if ($dbexec && $IDsql)
	{
		$row = $reguser->fetch();
			$ID=$row['userID'];
			
		$sql2 = "INSERT INTO client (userID,firstname, lastname, DOB, gender, telephone)
		VALUES ($ID,'$fname','$lname', '$dob', '$gender','$tel')";

		//execute querry
		$dbexec = $reguser->query($sql2);
		if($dbexec)
			header("Location: ../public/login.php");
		else
			echo "User could not be registered";
	}
	else
		echo "Not second querry";

}