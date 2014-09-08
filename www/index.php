<?php
/** SamsonPHP init script */

/** Set default locale to - Russian */
define('DEFAULT_LOCALE', 'ru');

/** Set new project structure vendor path */
define('__SAMSON_VENDOR_PATH', '../vendor/');

/** Load SamsonPHP framework */
require(__SAMSON_VENDOR_PATH.'/autoload.php');

/** Set supported locales */
setlocales('ru');

/** Start SamsonPHP web-application */
s()->composer()->subscribe('core.e404', 'main_e404')->start('main');
