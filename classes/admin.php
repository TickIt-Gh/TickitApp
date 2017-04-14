<?php
/**
*@author VladimirFomen
*Admin class with all attributes and functionalities of an
* admin class.
*
**/
public class Admin{
  private $email;

  private $role;

  private $company;

  public function __constructor(){

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

  public function displayDashboard(){

  }

  public function editListing(){

  }

  public function addListing(){

  }
}

?>
