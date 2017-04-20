<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/20/2017
 * Time: 11:10 AM
 */

include_once '../setting/init.php';
include_once CLASSES . 'contact.php';


if (isset($_GET['name'])) { //if a new contact request is received
    return add_new_contact_us($_GET['name'], $_GET['email'], $_GET['message']); //add to database
}

/**
 * This function adds a new contact infomation to the database
 * @param $user name of contact person
 * @param $email email of contact person
 * @param $message message of contact person
 */
function add_new_contact_us($user, $email, $message)
{
    $contact_us = new contact();
    $contact_us->add_contact_us($user, $email, $message);
}

