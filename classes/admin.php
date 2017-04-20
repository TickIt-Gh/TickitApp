<?php
/**
*@author VladimirFomene
*Admin class with all attributes and functionalities of an
* admin class.
*
**/

//Require our database connection class.
require_once("../database/Database.php");


//Require bus listing class
require_once("listing.php");
require_once("User.php");

class Admin extends User{
  private $email;

  private $adminID;

  private $password;

  private $session;

  private $status = "inactive";

  private $role;

  private $company;

  public function __constructor(){

  }

  public function getAdminID(){
    return $this->adminID;
  }

  public function setAdminID($newID){
    $this->adminID = $newID;
  }

  public function getSession(){
    return $this->session;
  }

  public function setSession($newSession){
    $this->session = $newSession;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($newPass){
    $this->password = $newPass;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($newEmail){
    $this->email = $newEmail;
  }

  public function getRole(){
    return $this->role;
  }

  public function setRole($newRole){
    $this->role = $newRole;
  }

  public function getCompany(){
    return $this->company;
  }

  public function setCompany($newCompany){
    $this->company = $newCompany;
  }

  public function getListings(){
    $db = new Database;
    $sql = "SELECT listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, listing_status, price, managed_by
    FROM bus_listing";
    $result = $db->query($sql);

    if(!$result){
      print("Could not get records from the database.");
      exit;
    }
    $records = $db->fetchAll();
    return $records;
  }

  public function editListing($listingID){
    $db = new Database;
    $sql = "SELECT listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, listing_status, price, managed_by
    FROM bus_listing WHERE listing_id = $listingID";
    $result = $db->query($sql);

    if(!$result){
      print("Could not get records from the database.");
      exit;
    }
    return $db->fetch_json();

  }

  public function UpdateListing($listing){
    $db = new Database;
    $sql = "UPDATE bus_listing SET listing_id = $listing->getListingId() ,
    bus_number = $listing->getBusNumber() , available_seats = $listing->getAvailableSeats(),
    depature_time = '$listing->getDepartureTime()', departure_date = '$listing->getDepartureDate()',
    departure_point = '$listing->getDeparturePoint()' , destination_point = '$listing->getDestinationPoint()',
    listing_status = '$listing->getListingStatus()', price = $listing->getPrice(), managed_by = $listing->getManagedBy()
    WHERE listing_id = $listing->getListingId()";

    return $db->query($sql);
  }

  public function deleteListing($listingID){
    $db = new Database;
    $sql = "DELETE FROM bus_listing
        WHERE listing_id = $listingID";

    return $db->query($sql);
  }

  public function addListing($listing){
    $db = new Database;
    $busNumber = $listing->getBusNumber();
    $availableSeats = $listing->getAvailableSeats();
    $departureTime = $listing->getDepartureTime();
    $departureDate = $listing->getDepartureDate();
    $departurePoint = $listing->getDeparturePoint();
    $destination = $listing->getDestinationPoint();
    $status = $listing->getListingStatus();
    $price = $listing->getPrice();
    $manager = $listing->getManagedBy();

    $sql = "INSERT INTO bus_listing (listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, listing_status, price, managed_by)
    VALUES (NULL, '$busNumber', $availableSeats,
    '$departureTime', '$departureDate', '$departurePoint',
    '$destination', '$status',
    $price, $manager)";

    return $db->query($sql);

  }
}

?>
