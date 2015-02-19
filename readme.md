#SamsonPHP Bootstrap

> Quickstarter for creating projects with SamsonPHP

#Installation
First of all you must get working [Composer](http://getcomposer.org).

Use ```php composer.phar create-project --prefer-dist -s dev samsonos/htmlapp [your_path]``` for automatic installation of SamsonPHP application
and all of its dependencies. If you have installed composer globally you should use ```composer create-project --prefer-dist -s dev samsonos/htmlapp [your_path]``` command.

#What next?
* You should change this readme.md to describe future project purposes
* Create ```www\cache``` folder with right to write for your web-server user
* Create database and configure connection to it via ```/app/config/ActiveRecordConfig.php```([How to configure module](https://github.com/samsonphp/config))
* Open your project in browser to check if everything is fine.
* Write your project code and have fun!

To learn more about using SamsonPHP [visit official documentation](http://samsonphp.com)

Developed by [SamsonOS](http://samsonos.com/)
