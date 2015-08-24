Doctrine Skeleton
=================


Download Composer
-----------------

Run this in your terminal to get the latest Composer version:
```
curl -sS https://getcomposer.org/installer | php
```
Or if you don't have curl:
```
php -r "readfile('https://getcomposer.org/installer');" | php
```
This installer script will simply check some php.ini settings, warn
you if they are set incorrectly, and then download the latest composer.phar in the current directory.

For composer documentation, please refer to [getcomposer.org](https://getcomposer.org/)


Install
-------

Run each command one at a time.
```
vagrant up
vagrant ssh
cd /vagrant
cp config/autoload/local.php.dist config/autoload/local.php
php composer.phar install
php public/index.php orm:schema-tool:create
php public/index.php data-fixture:import
```

Test
----
```
http --verify no --auth doctrine-skeleton:password -f POST https://api-skeletons.doctrine-skeleton/oauth grant_type=client_credentials
```
