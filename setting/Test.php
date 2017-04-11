<?php
/**
 * Created by PhpStorm.
 * User: razak
 * Date: 4/10/2017
 * Time: 8:12 PM
 */

include_once 'init.php';

//include_once PUBLICS . 'sign_up.php';
include_once DATABASES . 'Database.php';

$db = new Database();
$db->query('SELECT * FROM 	admin');
echo $db->count_rows();

echo $yesy;