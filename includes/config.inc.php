<?php
error_reporting (E_ALL ^ (E_DEPRECATED | E_NOTICE));
session_start();
////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
//date_default_timezone_set('MST');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');

////////////////////////////////////////////////////////////////////////////////
// Define constants for database connectivty
////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////
// Define absolute application paths
////////////////////////////////////////////////////////////////////////////////

// Use PHP's directory separator for windows/unix compatibility
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);

// Define absolute path to server root
defined('SITE_ROOT') ? NULL : define('SITE_ROOT', dirname(dirname(__FILE__)).DS);

// Define absolute path to includes
defined('INCLUDE_PATH') ? NULL : define('INCLUDE_PATH', SITE_ROOT.'includes'.DS);
defined('IMG_PROJECT_PATH') ? NULL : define('IMG_PROJECT_PATH', SITE_ROOT.'img_project'.DS);
defined('FUNCTION_PATH') ? NULL : define('FUNCTION_PATH', INCLUDE_PATH.'functions'.DS);
defined('LIB_PATH') ? NULL : define('LIB_PATH', INCLUDE_PATH.'libraries'.DS);

defined('TEMPLATE_PATH') ? NULL : define('TEMPLATE_PATH', INCLUDE_PATH.'templates'.DS);

//////////////////////////////////////////////////////
// permision

//

////////////////////////////////////////////////////////////////////////////////
// Include library, helpers, functions
////////////////////////////////////////////////////////////////////////////////
require_once(INCLUDE_PATH.'database.inc.php');
require_once(FUNCTION_PATH.'functions.inc.php');
require_once(LIB_PATH.'database.class.php');