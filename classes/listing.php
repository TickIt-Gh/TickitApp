<?php
/**
*@author VladimirFomene
*Listing class with all attributes and functions of a
* bus listing.
*
**/

//Require our database connection class.
require_once '../setting/init.php';
require_once("../database/Database.php");

class Listing{
  private $listing_id;

  private $bus_number;

  private $available_seats;

  private $departure_time;

  private $departure_date;

  private $departure_point;

  private $destination_point;

  private $listing_status = "unavailable";

  private $price;

  private $managed_by;

  public function __constructor(){

  }

  public function getListingId(){
    return $this->listing_id;
  }

  public function setListingId($id){
    $this->listing_id = $id;
  }

  public function getBusNumber(){
    return $this->bus_number;
  }

  public function setBusNumber($newBusNumber){
    $this->bus_number = $newBusNumber;
  }

  public function getAvailableSeats(){
    return $this->available_seats;
  }

  public function setAvailableSeats($NoSeats){
    $this->available_seats = $NoSeats;
  }

  public function getDepartureTime(){
    return $this->departure_time;
  }

  public function setDepartureTime($newTime){
    $this->departure_time = $newTime;
  }

  public function getDepartureDate(){
    return $this->departure_date;
  }

  public function setDepartureDate($newDate){
    $this->departure_date = $newDate;
  }

  public function getDeparturePoint(){
    return $this->departure_point;
  }

  public function setDeparturePoint($newDeparturePoint){
    $this->departure_point = $newDeparturePoint;
  }

  public function getDestinationPoint(){
    return $this->destination_point;
  }

  public function setDestinationPoint($newDestinationPoint){
    $this->destination_point = $newDestinationPoint;
  }

  public function getListingStatus(){
    return $this->listing_status;
  }

  public function setListingStatus($newStatus){
    $this->listing_status = $newStatus;
  }

  public function getManagedBy(){
    return $this->managed_by;
  }

  public function setManagedBy($newManager){
    $this->managed_by = $newManager;
  }

  public function getPrice(){
    return $this->price;
  }

  public function setPrice($newPrice){
    $this->price = $newPrice;
  }

  public function getListings(){
    $db = new Database;
    $sql = "SELECT listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, price
    FROM bus_listing WHERE listing_status ='available'";
    $result = $db->query($sql);

    if(!$result){
      print("Could not get records from the database.");
      exit;
    }
    $records = $db->fetchAll();
    return $records;
  }

}

?>
