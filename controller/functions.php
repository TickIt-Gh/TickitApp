<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 3/24/2017
 * Time: 1:22 PM
 */


require_once '../setting/init.php';

/**
 * @param $marked_string unformatted string
 * @return mixed clean string
 */
function strip_zeros_from_date($marked_string)
{
    $no_zeros = str_replace('*0', '', $marked_string);
    $cleaned_string = str_replace('*', '', $no_zeros);
    return $cleaned_string;
}

/**
 * @param null $location redirect to location
 */
function redirect_to($location = NULL)
{
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

/**
 * @param string $message message to put in p tag
 * @return string message in p tag
 */
function output_message($message = "")
{
    if (!empty($message)) {
        return "<p class = \"message\">{$message}</p>";
    }
    return '';
}

/**
 * @param $email email to verify
 * @return bool true if valid
 */
function validate_email($email)
{
    return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email);
}

/**
 * @param $password password to validate
 * @return bool true if valid
 */
function validate_password($password)
{
    $r1 = '/[A-Z]/';  //Uppercase
    $r2 = '/[a-z]/';  //lowercase
    $r3 = '/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
    $r4 = '/[0-9]/';  //numbers
    if (preg_match_all($r1, $password, $o) < 1) return false;
    if (preg_match_all($r2, $password, $o) < 1) return false;
    if (preg_match_all($r3, $password, $o) < 1) return false;
    if (preg_match_all($r4, $password, $o) < 1) return false;
    if (strlen($password) < 6) return false;
    return true;
}



/**
 * @param $name name to validate
 * @return bool true if name is valid
 */
function validate_name($name)
{
    /***
     * [a-zA-Z-'& ] for complex names such as Abdul-Razak, D'Maria
     */
    return preg_match("/^[a-zA-Z-'& ]*$/", $name);
}

/**
 * @param $username username to validate
 * @return int 1 if matches
 */
function validate_username($username)
{
    return preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $username);

}



/**
 * @param $data unformated string
 * @return string trimmed string
 */
function format_data($data)
{
    $data = trim($data); //remove from and back spaces
    $data = htmlspecialchars($data);
    return $data;
}

?>
