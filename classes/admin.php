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

class Admin{
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
    return $adminID;
  }

  public function getSession(){
    return $session;
  }

  public function setSession($newSession){
    $session = $newSession;
  }

  public function getPassword(){
    return $password;
  }

  public function setPassword($newPass){
    $password = $newPass;
  }

  public function getEmail(){
    return $email;
  }

  public function setEmail($newEmail){
    $email = $newEmail;
  }

  public function getRole(){
    return $role;
  }

  public function setRole($newRole){
    $role = $newRole;
  }

  public function getCompany(){
    return $company;
  }

  public function setCompany($newCompany){
    $company = $newCompany;
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
    $db = new Datbase;
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
    $db = new Datbase;
    $sql = "UPDATE bus_listing SET listing_id = $listing->getListingId() ,
    bus_number = $listing->getBusNumber() , available_seats = $listing->getAvailableSeats(),
    depature_time = '$listing->getDepartureTime()', departure_date = '$listing->getDepartureDate()',
    departure_point = '$listing->getDeparturePoint()' , destination_point = '$listing->getDestinationPoint()',
    listing_status = '$listing->getListingStatus()', price = $listing->getPrice(), managed_by = $listing->getManagedBy()
    WHERE listing_id = $listing->getListingId()";

    return $db->query($sql);
  }

  public function addListing($listing){
    $db = new Datbase;
    $sql = "INSERT INTO bus_listing (listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, listing_status, price, managed_by)
    VALUES ($listing->getListingId(), $listing->getBusNumber(), $listing->getAvailableSeats(),
    '$listing->getDepartureTime()', '$listing->getDepartureDate()', '$listing->getDeparturePoint()',
    '$listing->getDestinationPoint()', '$listing->getListingStatus()',
    $listing->getPrice(), $listing->getManagedBy()";

    return $db->query($sql);

  }
}

?>
