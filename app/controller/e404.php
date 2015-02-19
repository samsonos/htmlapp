<?php
/**
 * Created by PhpStorm.
 * User: egorov
 * Date: 19.02.2015
 * Time: 12:01
 */

/** E404 - Page not found controller action */
function e404__handler()
{
    $this->view('e404')->title('Page not found');
}