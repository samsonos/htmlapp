<?php 
/** Configuration */

// If this is SamsonOS development web-server
if ($_SERVER['SERVER_ADDR'] == '192.168.1.99') {
    // Set specific path to local modules avoiding composer module duplication in every project
    define('__SAMSON_VENDOR_PATH', '/var/www.prod/vendor/');
    define('__SAMSON_CORE_PATH', __SAMSON_VENDOR_PATH.'/samsonos/php/core/');
    /*if (file_exists('../../vendor/samsonos/php/core')) {
        define('__SAMSON_CORE_PATH', '../../vendor/samsonos/php/core/');
    } else {
        define('__SAMSON_CORE_PATH', __SAMSON_VENDOR_PATH.'/samsonos/php/core/');
    }/**/

}

// Define default path to vendor dir
if (!defined('__SAMSON_VENDOR_PATH')) {
    define('__SAMSON_VENDOR_PATH', 'vendor/');
}

// Define default path to samsonos/php_core dir
if (!defined('__SAMSON_CORE_PATH')) {
    define('__SAMSON_CORE_PATH', 'vendor/samsonos/php_core/');
}

// Подключить фреймворк SamsonPHP
require( __SAMSON_CORE_PATH.'samson.php');
