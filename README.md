# UE-3DW22-S2

1- :  install the dependencies with Composer :
composer install

2- : configer your connexion to data base in .env 

3- : create database : 
php bin/console d:d:c    

4- Make migration from the user entity :

php bin/console make:migration

5- : send migration :

php bin/console doctrine:migrations:migrate


