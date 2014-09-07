<?php
/** SamsonPHP init script */

/** Set default locale to - English! */
define('DEFAULT_LOCALE', 'en');

/** Set new project structure vendor path */
define('__SAMSON_VENDOR_PATH', '../vendor/');

/** Load SamsonPHP framework */
require(__SAMSON_VENDOR_PATH.'/autoload.php');

/** Set supported locales */
setlocales('ru', 'ua', 'en');

/** Start SamsonPHP web-application */
s()->composer()->e404('e404')->start( 'main' );
