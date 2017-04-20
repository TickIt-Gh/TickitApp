<?php

/**
 * Contact class thank manages everything about contact us information
 * Created by PhpStorm.
 * User: razak
 * Date: 4/20/2017
 * Time: 1:49 AM
 */

include_once '../setting/init.php';
include_once DATABASES . 'Database.php';

class Contact extends Database
{

    /**
     * This function add contact us information to our database
     * @param $username username of user
     * @param $email email of user
     * @param $message message user is sending
     * @return return true if successfully send
     */
    public function add_contact_us($username, $email, $message)
    {
        return $this->query("INSERT INTO contact (name, email, message) VALUES ('$username', '$email', '$message')");
    }

    /**
     * This method get all the contact details in our database
     * @return bool|string a json format of all contact information
     */
    public function get_all_contacts()
    {
        $this->query("SELECT * from contact");
        return $this->fetch_json();
    }

    /**
     * This method returns messages of a particular user
     * @param $username username to display his/her messages
     * @return bool|string return json format of all messages of a particular user
     */
    public function get_all_message_of_a_user($username)
    {
        $this->query("SELECT message from contact WHERE name='$username'");
        return $this->fetch_json();
    }

}

/**
 * TEST
 */
/*
$da = new Contact();
//$da->add_contact_us('Admin', 'admin@admin.com', 'Reporting an error in query');
var_dump($da->get_all_message_of_a_user('admin'));
*/