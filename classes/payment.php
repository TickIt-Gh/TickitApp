
<?php

/*Payment class
* @author Linda Bhebhe 
*/
class Payment{

	//properties 
	private $listingID;
	private $userID;
	private $date;
	private $method;



    //methods

	//constructor
	public function __constructor(){

	}


public function getListingID(){
	return $this->listingID;
}

public function getUserID(){
		return $this->userID;
}

public function getDate(){
		return $this->date;
}

public function getPaymentMethod(){
		return $this->method;
}

public function insertPayment(){

	
}
	

}

?>