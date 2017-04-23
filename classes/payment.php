<?php

/*Payment class
* @author Linda Bhebhe & Job M
*/

require_once '../setting/init.php';

class Payment
{

    //properties
    private $listingID;
    private $userID;
    private $date;
    private $method;


    //methods

    //constructor
    public function __constructor()
    {

    }

    /**
     * get info of a  bus listing
     * @return mixed info of listing
     */
    public function getListingID()
    {
        return $this->listingID;
    }

    /**
     * get the id of  a user
     * @return mixed user id
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * get the date of a  user
     * @return mixed date of user
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * get payment method
     * @return mixed payment method
     */
    public function getPaymentMethod()
    {
        return $this->method;
    }

    /**
     * insert a new payment
     */
    public function insertPayment()
    {


    }


}

?>