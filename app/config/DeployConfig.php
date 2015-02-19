<?php
namespace samsonphp;

/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 19.08.14 at 16:06
 */

/** Deploy configuration entity */
class DeployConfig extends \samsonphp\config\Entity
{
    public $host 	= '';
    public $wwwroot	= '';
    public $username= '';
    public $password= '';
}
