<?php

/**
 * This is the user class that contains the properties of the users of the app.
 *This class is extended by the admin and the client classes
 *@ Brenda Mboya
 */

//Require our database connection class.
require_once("../database/Database.php");

class User
{
	// each user of the application have a userid,email,password and status
	//properties
	public $userid;
	public $email;
	private $password;
	private $status;
	
	// this user can change their password through this function
	 public changePass($userid,$pass){
	 	//create an instance of the database class
	 	 $conn = new Database();
	 	if(!$conn->connect()) {
	 	echo "cannot connect to database";

	 	}
	 	else{
	 	
		// hash the password
		$hashPass=password_hash($pass,PASSWORD_DEFAULT)
		// sql
		$sql="UPDATE user SET password='$hashPass' WHERE userid= $userid";
		// now query the database
		$finalResult=$this->query($sql)
		if($final){
			echo " you have successfully changed your password";
		}

	}



	 }/**
	 *This function get the email address of the user
	 *@return  email
	 **/
	  public function getEmail(){
    return $this->email;
  }
  /**
  *This function allows the user to change their email address
  *@return boolean(true/false)
  **/
  public changeEmail($userid,$mail){
  	// connect to the database
  	/create an instance of the database class
	 	 $conn = new Database();
	 	if(!$conn->connect()) {
	 	echo "cannot connect to database";

	 	}
	 	else{
	 		$sql="UPDATE user SET email='$mail' WHERE userid= $userid";
		// now query the database
		$finalResult=$this->query($sql)
		if($final){
			echo " you have successfully changed your email";
		}




  }
}

}