
<?php

include_once '../setting/init.php';
include_once DATABASES . 'Database.php';
require_once 'User.php';

/*Class for the client
* Extends the user class
* @author Linda Bhebhe
*/

class Client extends User{


   //properties
	private $firstname;
	private $lastname;
	private $dateOfBirth;
	private $gender;
	private $telephone;
	private $id;


   //methods

	//constructor
	public function __constructor(){

	}


    /*Method to get the firstname
    *@return firstname the name of the client
    */
	public function getFirstname(){
		return $this->firstname;
	}

    /*Method to get the lastname
    *@return lastname the name of the client
    */
	public function getLastname(){
		return $this->lastname;
	}

    
    /*Method to get the date of birth
    *@return dateOfBirth the date of birth of the client
    */
	public function getDateOfBirth(){
		return $this->dateOfBirth;
	}


     /*Method to get the gender
    *@return gender the gender of the client
    */
	public function getGender(){
		return $this->gender;
	}

    
    /*Method to get the telephone number
    *@return telephone the telephone number of the client
    */
	public function getTelephone(){
		return $this->telephone;
	}

   

    /* Method to insert  a new client 
    *  Calls a method to insert a user 
    *  The insert client query inserts 
    */
    public function insertClient($firstname, $lastname, $dateOfBirth, $gender, $telephone, $email, $password, $session, $status, $is_admin){
    	$this->id=$this->add_user_returns_userID($email, $password, $session, $status, $is_admin);

    	  return $this->query("INSERT INTO client (userID, firstName, lastName, DOB, gender, telephone) VALUES ('$this->id','$firstname','$lastname','$dateOfBirth', '$gender','$telephone')");

    }





}


/**Testing
$newclient = new Client;
echo "testing";

echo $newclient->insertClient('noe', 'bhebhe', '13/03/95','F', '0563224123','lee003@gmail.com', 'noe','on','active','yes');
*/

?>