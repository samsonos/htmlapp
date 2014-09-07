<?php
/**
 * SamsonCMS connection script
 * @author Vitaly Iegorov <egorov@samsonos.com>
 */

/** Define path SamsonCMS project */
define('__PATH', '/var/www.egorov/cms.dev/');

/** Set new project structure vendor path */
define('__SAMSON_VENDOR_PATH', __PATH.'vendor/');

/** Load composer autoloader */
require(__SAMSON_VENDOR_PATH.'autoload.php');

/**
 * Configuration requirements
 *
 * Here we must include all configuration classes that will be used by
 * SamsonCMS
 */
require('../app/config/ActiveRecordConfig.php');
require('../app/config/CompressorConfig.php');
require('../app/config/DeployConfig.php');

/** Load SamsonCMS **/
require(__PATH.'/www/index.php');
