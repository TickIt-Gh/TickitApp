<?php
/**
*@author VladimirFomene
*Admin class with all attributes and functionalities of an
* admin class.
*
**/

//Require our database connection class.
require_once("../database/Database.php");
public class Admin{
  private $email;

  private $adminID;

  private $password;

  private $session;

  private $status = "inactive"

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

  public function displayDashboard(){

  }

  public function editListing(){

  }

  public function addListing(){

  }
}

?>
