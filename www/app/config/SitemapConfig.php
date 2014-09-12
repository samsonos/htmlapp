<?php
namespace samsonphp;
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>
 * on 19.08.14 at 16:07
 */

/** Конфигурация DEV для Sitemap */
class SitemapConfig extends \samson\core\Config
{
    public $__module = 'sitemap';

    public $schema = array(
        'sites' => array('sitemap_sites', 'portfolio/')
    );
}
