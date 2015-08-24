Doctrine Skeleton
=================

Install
-------

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

Client Credentials
```
http --verify no --auth doctrine-skeleton:password -f POST https://api-skeletons.doctrine-skeleton/oauth grant_type=client_credentials
```
