<?php
namespace htmlapp\main;

class Controller extends \samson\core\CompressableExternalModule
{
	protected $id = 'main';

    /** Universal main controller action */
    function __handler()
    {
        $this->view('index')->title('Main page');
    }
}
