<?php
include_once("C:/xampp/htdocs/TickitApp/unit/database/Database.php");

	class dbconnectionTest extends \PHPUnit_Framework_TestCase
	{

		public function testConnectReturnsTrue()
		{
			
			$connect = new Database;

			$this->assertTrue($connect->connect());
		}
		

	}
	?>