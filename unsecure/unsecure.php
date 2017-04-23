<?php

/*
*@author Job Mwesigwa 
*@version one
*/
include_once '../setting/init.php';
include_once CONTROLLER . 'functions.php';

//input variables
$fname = '';
$lname = '';
$email = '';
$dob = '';
$gender = '';
$tel = '';

#Errors variables
$fname_error = '';
$lname_error = '';
$date_error = '';
$email_error = '';
$phone_error = '';
$password_error = '';
$gender_error = '';
$user_exists_error = '';
$is_ok = true;


require_once('../database/Database.php');
//echo "I am proud";
if (isset($_POST['signup']))
    validregister();

/*
* Validates every field in the register page
* calls a method to check if user name already exists
*/
function validregister()
{
    //Array to take in errors
    //$errorMessages = [];
    global $fname_error, $lname_error, $date_error, $email_error, $phone_error, $password_error, $gender_error, $is_ok;
    global $fname, $lname, $email, $dob, $gender, $tel;


    //Validating first name
    if (!isset($_POST['firstname']) || $_POST['firstname'] === '') {
        $fname_error = "The fist name shouldn't be empty";
        $is_ok = false;
    } else if (!preg_match('/^[A-Za-z]*$/', $_POST['firstname'])) {
        $fname_error = "DO not include any symbol in the first name";
        $is_ok = false;
    } else {
        $fname = format_data($_REQUEST['firstname']);
    }


    //Validating Last name
    if (!isset($_POST['lastname']) || $_POST['lastname'] === '') {
        $lname_error = "The last name shouldn't be empty";
        $is_ok = false;
    } else if (!preg_match('/^[A-Za-z]*$/', $_POST['lastname'])) {
        $lname_error = "DO not include any symbol in the last name";
        $is_ok = false;
    } else {
        $lname = format_data($_REQUEST['lastname']);
    }


    //Validating date
    if (!isset($_POST['date_of_birth']) || $_POST['date_of_birth'] === '') {
        $date_error = "Please select date";
        $is_ok = false;
    } else {
        $dob = format_data($_REQUEST['date_of_birth']);
    }


    //Validating Email
    if (!isset($_POST['email']) || $_POST['email'] === '') {
        $email_error = "Your email field shouldn't be empty";
        $is_ok = false;
    } else if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $_POST['email'])) {
        $email_error = "Your email is not right";
        $is_ok = false;
    } else {
        $email = format_data($_REQUEST['email']);
    }

    //Validating the password
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $password_error = "The password shouldn't be empty";
        $is_ok = false;
    } else if (!(preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/', $_POST['password'])) || (strlen($_POST['password'])) < 6) {
        $password_error = "Make sure you have Caps, Lowercase, numbers and a symbol in you password";
        $is_ok = false;
    } else {
        $pwdhash = password_hash(format_data($_REQUEST['password']), PASSWORD_DEFAULT);
    }

    //Validating gender
    if (!isset($_POST['gender']) || $_POST['gender'] === '' || $_POST['gender'] == 'gender') {
        $gender_error = "Please select atleast one gender";
        $is_ok = false;
    } else {
        $gender = format_data($_REQUEST['gender']);
    }

    if (!isset($_POST['tel']) || $_POST['tel'] === '') {
        $phone_error = 'Please provide a correct phone number';
        $is_ok = false;
    } else {
        $tel = format_data($_REQUEST['tel']);
    }

    //user name exits
    if ($is_ok) {
        if (checkemail($email)) {
            registernewuser($fname, $lname, $email, $pwdhash, $dob, $gender, $tel);
        }
    }

}

/*
 *@param an array of errors
 *prints errors in the error array
 */
function printerrors($errors)
{
    foreach ($errors as $error) {
        echo $error . "<br><br>";
    }
    exit;
}

/*
 *@param email to be checked 
 *Checks if email is in the database
/*/
function checkemail($email)
{
    //Database object
    global $user_exists_error;
    $obj = new Database;
    //write sql
    $sqlemail = "SELECT * from user where email =  '$email'";
    //execute querry
    $user = $obj->query($sqlemail);

    //if the return table is empty
    if ($user && empty($obj->fetch()))
        return true;
    //registernewuser();
    else {
        $user_exists_error = "We already have a user with this email";
        return false;
    }
}

/*
 *Fuction inserts registered user into the database
 */
function registernewuser($fname, $lname, $email, $pwdhash, $dob, $gender, $tel)
{
    global $user_exists_error;
    //create instance of database class
    $reguser = new Database;

    $sql = "INSERT INTO user (email, password) VALUES ('$email','$pwdhash') ";

    $dbexec = $reguser->query($sql);
    $IDsql = $reguser->query("SELECT userID FROM user WHERE email = '$email'");


    if ($dbexec && $IDsql) {
        $row = $reguser->fetch();
        $ID = $row['userID'];

        $sql2 = "INSERT INTO client (userID,firstname, lastname, DOB, gender, telephone) VALUES ($ID,'$fname','$lname', '$dob', '$gender','$tel')";

        //execute querry
        $dbexec = $reguser->query($sql2);
        if ($dbexec) {
            //$user_exists_error = "Account created successfully";
            header("Location: ../public/login.php");
        } else
            $user_exists_error = "User could not be registered";
    } else
        $user_exists_error = "Not second querry";

}
