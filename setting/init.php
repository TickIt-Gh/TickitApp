<?php

/**
 * This set paths for easy access
 */
define('PARENT', dirname(dirname(__FILE__)) . '/');
define('ROOT', PARENT . '/');
define('SETTING', ROOT . 'setting/');
define('CLASSES', ROOT . 'classes/');
define('PAGES', ROOT . 'pages/');
define('LAYOUT', ROOT . 'layout/');
define('PUBLICS', ROOT . 'public/');
define('REGISTER', ROOT . 'register/');
define('DATABASES', ROOT . 'database/');
define('CONTROLLER', ROOT . 'controller/');
define('REQUIRES', ROOT . 'require/');

//error logger
require_once 'error_handler.php';

?>