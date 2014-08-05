<?php 
/** Configuration */

// Define default path to samsonos/php_core dir
if (!defined('__SAMSON_CORE_PATH')) {
    define('__SAMSON_CORE_PATH', __SAMSON_VENDOR_PATH.'samsonos/php_core/');
}

// Load SamsonPHP framework
require(__SAMSON_CORE_PATH.'samson.php');
