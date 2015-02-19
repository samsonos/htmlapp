#SamsonPHP Bootstrap

#Installation
First of all you must get [Composer](http://getcomposer.org) working on your system.

For automatic installation of SamsonPHP application and all of its dependencies use:
```shell
php composer.phar create-project --prefer-dist -s dev samsonos/htmlapp [your_path]
``` 

If you have installed composer globally you should use: 
```shell
composer create-project --prefer-dist -s dev samsonos/htmlapp [your_path]
```

#What next?
* You should change this readme.md to describe future project purposes
* Create ```www/cache``` folder with permissions to write for your web-server user
* Create database and configure connection to it via ```/app/config/ActiveRecordConfig.php```([How to configure module](https://github.com/samsonphp/config))
* Open your project in browser to check if everything is fine.
* Write your project code and have fun!

To learn more about using SamsonPHP [visit official documentation](http://samsonphp.com)

Developed by [SamsonOS](http://samsonos.com/)
