<?php
/** SamsonPHP init script */

/** Set default locale to - Russian */
define('DEFAULT_LOCALE', 'ru');

// Check if composer is installed
if (!file_exists('../vendor/autoload.php')) {
    die('/vendor folder does not exists, probably you have not installed composer dependencies(composer install)');
}

/** Load SamsonPHP framework */
require('../vendor/autoload.php');

/** Set supported locales */
setlocales('ru');

/** Start SamsonPHP web-application */
s()
    ->composer()                                        // Load configuration from composer.json
    ->subscribe('core.routing', array(url(), 'router')) // Use default SamsonPHP URL router
    ->subscribe('core.e404', 'main_e404')               // Set e404 error handler
    ->load('../src/main')                               // Load main module
    ->start('main');                                    // Start framework
