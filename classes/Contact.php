<?php

/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/20/2017
 * Time: 1:49 AM
 */

include_once '../setting/init.php';
include_once DATABASES . 'Database.php';

class Contact extends Database
{
    public function add_contact_us($username, $email, $message)
    {
        return $this->query("INSERT INTO contact (name, email, message) VALUES ('$username', '$email', '$message')");
    }

    public function get_all_contacts()
    {
        $this->query("SELECT * from contact");
        return $this->fetch_json();
    }

    public function get_all_contact_of_a_user($username)
    {
        $this->query("SELECT * from contact WHERE name='$username'");
        return $this->fetch_json();
    }

}

/**
 * TEST
 */
/*
$da = new Contact();
//$da->add_contact_us('Admin', 'admin@admin.com', 'Reporting an error in query');
var_dump($da->get_all_contact_of_a_user('admin'));
*/