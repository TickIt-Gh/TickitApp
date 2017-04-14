<?php
/**
*@author VladimirFomene
*Listing class with all attributes and functions of a
* bus listing.
*
**/
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
    return $listing_id;
  }

  public function getBusNumber(){
    return $bus_number;
  }

  public function setBusNumber($newBusNumber){
    $bus_number = $newBusNumber;
  }

  public function getAvailableSeats(){
    return $available_seats;
  }

  public function setAvailableSeats($NoSeats){
    $available_seats = $NoSeats;
  }

  public function getDepartureTime(){
    return $departure_time;
  }

  public function setDepartureTime($newTime){
    $departure_time = $newTime;
  }

  public function getDepartureDate(){
    return $departure_date;
  }

  public function setDepartureDate($newDate){
    $departure_date = $newDate;
  }

  public function getDeparturePoint(){
    return $departure_point;
  }

  public function setDeparturePoint($newDeparturePoint){
    $departure_point = $newDeparturePoint;
  }

  public function getDestinationPoint(){
    return $destination_point;
  }

  public function setDestinationPoint($newDestinationPoint){
    $destination_point = $newDestinationPoint;
  }

  public function getListingStatus(){
    return $listing_status;
  }

  public function setListingStatus($newStatus){
    $listing_status = $newStatus;
  }

  public function getManagedBy(){
    return $managed_by;
  }

  public function setManagedBy($newManager){
    $managed_by = $newManager;
  }

  public function getPrice(){
    return $price;
  }

  public function setPrice($newPrice){
    $price = $newPrice;
  }


}

?>
