#Application template for [SamsonPHP](http://samsonphp.com)

> Quickstarter for creating projects with SamsonPHP

#Installation
First of all you must get working [Composer](http://getcomposer.org).

Use ```php composer.phar create-project --prefer-dist -s dev samsonos/htmlapp [your_path]``` for automatic installation of SamsonPHP application
and all of its dependencies.

> After installation you should change this readme.md to describe future project purposes

This template includes automatic git repository creation and installing of [phpUnit](https://github.com/sebastianbergmann/phpunit/) and [phpCodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
Also git pre-commit hook will be automatically generated to check your code for PSR-2 coding style.

Also this template automatically creates www/cache folder with correct right to ```www-data``` user, which we suppose
is your webserver default user, to give ability modules to write there.

Also clean git repository is created in project root folder for you.

> If you do not want PHPCS features - go to ```.git/hooks``` and remove ```pre-commit``` hook file.

The next steps you must do to get it working:
* Create database and configure connection to it via ```/www/app/config/ActiveRecordConfig.php```([How to configure module](https://github.com/samsonos/php_core/wiki/0.3-Configurating))
* Open your project in web broswer to check if everything is fine.
* Write your project code and have fun!

To learn more about using SamsonPHP [visit official documentation](http://samsonphp.com)

Developed by [SamsonOS](http://samsonos.com/)
