<?php
include_once("C:/xampp/htdocs/TickitApp/unit/database/Database.php");

	class dbconnectionTest extends \PHPUnit_Framework_TestCase
	{

		public function testConnectReturnsTrue()
		{
			
			$connect = new Database;

			$this->assertTrue($connect->connect());
		}
		// testing the real_escape method for preventing sql injection
		/*public function testRealEscape(){

			$connect = new dbconnection;
			$sql="INSERT INTO useraccount (username,pwd,fname,lname,email,gender,major_id,userstatus,per_id)
	VALUES('%s','%s','%s','%s','%s','%s','%s', '%s','%s')";
			// $myList= array("Njoki","sizfaith","Lily","njoki","liliy@gmail.com","engineering","ACTIVE",1);

			$this->assertTrue($connect->realEscape($sql,'Max','sizfaith','Lily','njoki','max@gmail.com', 'F','2','ACTIVE',1));


		}**/

	}
	?>