<?php
/** SamsonPHP init script */

/** Set new project structure vendor path */
define('__SAMSON_VENDOR_PATH', '../vendor/');

/** Load SamsonPHP framework */
require(__SAMSON_VENDOR_PATH.'/autoload.php');

/** Start SamsonPHP web-application */
s()->composer()->subscribe('core.e404', 'main_e404')->start( 'main' );
