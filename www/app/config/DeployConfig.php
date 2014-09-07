<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 19.08.14 at 16:06
 */
namespace samsonos;

/** Конфигурация DEV для Deploy */
class DeployConfig extends \samson\core\Config
{
    public $__module = 'deploy';

    public $host 	= '';
    public $wwwroot	= '';
    public $username= '';
    public $password= '';
}
