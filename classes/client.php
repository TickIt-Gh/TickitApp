
<?php


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


}

?>