<?php

/**
 * This is the user class that contains the properties of the users of the app.
 *This class is extended by the admin and the client classes
 *@author Brenda Mboya
 */


include_once '../setting/init.php';
//Require our database connection class.
require_once DATABASES . 'Database.php';

class User extends Database
{
    // each user of the application have a userid,email,password and status
    //properties
    private $userid;
    private $email;
    private $password;
    private $status;

    // this user can change their password through this function
    public function changePass($userid, $pass)
    {
        
        if (!$this->connect()) {
            echo "cannot connect to database";

        } else {

            // hash the password
            $hashPass = password_hash($pass, PASSWORD_DEFAULT);
            // sql
            $sql = "UPDATE user SET password='$hashPass' WHERE userid= $userid";
            // now query the database
            $finalResult = $this->query($sql);
            if ($finalResult) {
                echo " you have successfully changed your password";
            }
        }
    }

    /**
     *This function get the email address of the user
     * @return  email
     **/
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *This function allows the user to change their email address
     * @return boolean(true/false)
     **/
    public function changeEmail($userid, $mail)
    {
        // connect to the database
        
        if (!$this->connect()) {
            echo "cannot connect to database";

        } else {
            $sql = "UPDATE user SET email='$mail' WHERE userID= $userid";
            // now query the database
            $finalResult = $this->query($sql);
            if ($finalResult) {
                echo " you have successfully changed your email";
            }
        }
    }

    /**
     * This function add a new user to the database and returns the primary key of the new column
     * @param $email email of user
     * @param $password password of user
     * @param $session session[ 'on','off']
     * @param $status status of user ['active','inactive']
     * @param $is_admin type of user ['yes','no']
     * @return bool primary key of new user added
     */
    public function add_user_returns_userID($email, $password, $session, $status, $is_admin)
    {
        $sql = "INSERT INTO user (email, password, session, status, is_admin) VALUES ( '$email', '$password', '$session', '$status', '$is_admin')";
        //echo $sql;
        return $this->query_return_id($sql);
    }

}

/**
 * TEST
 */
/*
$us = new User();
echo $us->add_user_returns_userID('test@test.com', 'passwordher', 'on', 'active', 'no');
*/
