<?php
/**
 * @author VladimirFomene
 *Admin class with all attributes and functionalities of an
 * admin class.
 *
 **/

require_once '../setting/init.php';
//Require our database connection class.
require_once DATABASES.'Database.php';


//Require bus listing class
require_once("listing.php");
require_once("User.php");

class Admin extends User
{
    private $email;
    private $adminID;
    private $password;
    private $session;
    private $status = "inactive";
    private $role;
    private $company;

    /**
     * constructor of admin
     */
    public function __constructor()
    {

    }

    /**
     * gets the admin id
     * @return mixed ID of admin
     */
    public function getAdminID()
    {
        return $this->adminID;
    }

    /**
     * sets a new id of admin
     * @param $newID new id
     */
    public function setAdminID($newID)
    {
        $this->adminID = $newID;
    }

    /**
     * this gets the session of the admin
     * @return mixed  session of user
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * set the admin new session
     * @param $newSession new of session
     */
    public function setSession($newSession)
    {
        $this->session = $newSession;
    }

    /**
     * gets admin password
     * @return mixed password of admin
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * set password
     * @param $newPass new password
     */
    public function setPassword($newPass)
    {
        $this->password = $newPass;
    }

    /**
     * get admin email
     * @return mixed email of admin
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * set admin email
     * @param $newEmail new aemail
     */
    public function setEmail($newEmail)
    {
        $this->email = $newEmail;
    }

    /**
     * get role of admin
     * @return mixed role of admin
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * set role of admin
     * @param $newRole new role
     */
    public function setRole($newRole)
    {
        $this->role = $newRole;
    }

    /**
     * get comapany of admin
     * @return mixed company of admin
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * set company
     * @param $newCompany new company
     */
    public function setCompany($newCompany)
    {
        $this->company = $newCompany;
    }

    /**
     * get bus listing
     * @return array|bool|null array of all bus listing
     */
    public function getListings()
    {
        $db = new Database;
        $sql = "SELECT listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, listing_status, price, managed_by
    FROM bus_listing";
        $result = $db->query($sql);

        if (!$result) {
            print("Could not get records from the database.");
            exit;
        }
        $records = $db->fetchAll();
        return $records;
    }

    /**
     * this function get the info of a bus to edit
     * @param $listingID listingId of a bus
     * @return bool|string info of a listing
     */
    public function editListing($listingID)
    {
        $db = new Database;
        $sql = "SELECT listing_id, bus_number, available_seats, depature_time,
    departure_date, departure_point, destination_point, listing_status, price, managed_by
    FROM bus_listing WHERE listing_id = $listingID";
        $result = $db->query($sql);

        if (!$result) {
            print("Could not get records from the database.");
            exit;
        }
        return $db->fetch_json();

    }

    /**
     * update the info a bus
     * @param $listing listing information json
     * @return return  true if successful
     */
    public function UpdateListing($listing)
    {
        $db = new Database;
        $listingID = $listing->getListingId();
        $busNumber = $listing->getBusNumber();
        $availableSeats = $listing->getAvailableSeats();
        $departureTime = $listing->getDepartureTime();
        $departureDate = $listing->getDepartureDate();
        $departurePoint = $listing->getDeparturePoint();
        $destination = $listing->getDestinationPoint();
        $status = $listing->getListingStatus();
        $price = $listing->getPrice();
        $manager = $listing->getManagedBy();
        $sql = "UPDATE bus_listing SET listing_id = $listingID,
    bus_number = '$busNumber' , available_seats = $availableSeats,
    depature_time = '$departureTime', departure_date = '$departureDate ',
    departure_point = '$departurePoint' , destination_point = '$destination',
    listing_status = '$status', price = $price, managed_by = $manager
    WHERE listing_id = $listingID";

        return $db->query($sql);
    }

    /**
     * delete a listing
     * @param $listingID listing id
     * @return return true of successful
     */
    public function deleteListing($listingID)
    {
        $db = new Database;
        $sql = "DELETE FROM bus_listing
        WHERE listing_id = $listingID";

        return $db->query($sql);
    }

    /**
     * add a bus
     * @param $listing info of listing
     * @return return true if successful
     */
    public function addListing($listing)
    {
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
