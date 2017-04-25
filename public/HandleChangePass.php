<?php
/**This file allows the user to change their password
*@author Brenda Mboya
**/
include_once '../setting/init.php';
include_once CLASSES. 'user.php';
 if(isset($_POST['submit'])){
 	$passTwo;
		      //declaring variables and getting to capture the data
		      if(!empty(isset($_POST['email']))){
		      	$email=$_POST['email'];
		      }

		      if(!empty(isset($_POST['pass']))){
		      	$passOne=$_POST['pass'];

		      }
		      if(!empty(isset($_POST['newPass']))){
		      	$passTwo=$_POST['newPass'];

		      }
		      
		     // create a user object
		      	$user= new User();
		      	$change=$user->changePass($email,$passTwo);
		      	



}



?>