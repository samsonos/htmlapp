#Application template for [SamsonPHP](http://samsonphp.com)

> Quickstarter for creating projects with SamsonPHP

#Installation
First of all you must get working [Composer](http://getcomposer.org).

Use ```php composer.phar create-project --prefer-dist -s dev samsonos/htmlapp [your_path]``` for automatic installation of SamsonPHP application
and all of its dependencies.

> After installation you should change this readme.md to describe future project purposes

This template includes automatic git repository creation and installing of [phpUnit](https://github.com/sebastianbergmann/phpunit/) and [phpCodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
Also git pre-commit hook will be automatically generated to check your code for PSR-2 coding style.

> If you do not want PHPCS features - go to ```.git/hooks``` and remove ```pre-commit``` hook file.

The next steps you must do to get it working:
* Give web-server rights to write to ```/www/cache``` folder
* Create database and configure connection to it via ```/www/app/config/ActiveRecordConfig.php```
* Open your project in web broswer to check if everything is fine.
* Write your project code and have fun!

To learn more about using SamsonPHP [visit official documentation](http://samsonphp.com)

Developed by [SamsonOS](http://samsonos.com/)
