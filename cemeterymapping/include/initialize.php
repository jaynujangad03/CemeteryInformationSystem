<?php
// Define the core paths as constants
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Update SITE_ROOT to match the actual directory structure
defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'cemeterymapping'.DS.'cemeterymapping');

// Define the include path
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'include');

// Debugging: Uncomment these lines if needed to check the paths
// echo 'SITE_ROOT: ' . SITE_ROOT . '<br>';
// echo 'LIB_PATH: ' . LIB_PATH . '<br>';

// Load the necessary files
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."accounts.php");
require_once(LIB_PATH.DS."autonumbers.php");
require_once(LIB_PATH.DS."categories.php");
require_once(LIB_PATH.DS."orders.php");
require_once(LIB_PATH.DS."stockin.php");
require_once(LIB_PATH.DS."types.php");
require_once(LIB_PATH.DS."services.php");
// require_once(LIB_PATH.DS."promos.php");
require_once(LIB_PATH.DS."people.php");
require_once(LIB_PATH.DS."transaction.php");
// require_once(LIB_PATH.DS."settings.php");
require_once(LIB_PATH.DS."database.php");

?>
