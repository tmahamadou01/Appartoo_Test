#Application de gestion de carnet d'Adresse


##Objectifs

Concevoir une Application pour gerer son carnet d'adresse .

##Installation

#####Requis: 

* [Installer composer](https://getcomposer.org/download/)

#####Installer le projet

``` shell
$ git clone https://github.com/tmahamadou01/Appartoo_Test.git
$ cd Appartoo_Test
$ composer install
$ ./chmod.sh ( Script Bash pour attribuer les droits aux caches)
$ php app/console doctrine:database:create
$ php app/console doctrine:schema:update --force
$ php app/console doctrine:fixtures:load
```

