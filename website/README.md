Site web  des plateformes OpenData du Togo
=====================================

Cette plateforme est un annuaire qui liste les plateformes OpenData du Togo. Créée avec le framwork Symfony 4, elle nécessite pour cela quelques prérequis pour son installation.  

Prérequis
---------

  * PHP 7.1.3 ou supérieur;
  * L'extension PHP  PDO-SQLite doit être activée ;
  * et les  [prérequis ordinaires des applications symfony][1].

Installation
------------

Cloner ce repository en exécutant cette commande:

```bash
$ git clone https://github.com/odtt/annuaire.git
```
Assurez-vous d'avoir installer [composer][2]
Faîte un cd vers le repertoire et installer les dépendance avec cette commande:

```bash
$ composer install
```

Usage
-----
Créer la base de données à laquelle la plateforme doit se connecter pour charger les données.

```bash
$ cd website/
$ php bin/console doctrine:database:create
```

Pour visualiser le site web en local, exécuter cette commande pour lancer le built-in web server et accéder à l'application dans votre navigateur à cette addresse: <http://localhost:8000>:

```bash
$ php bin/console server:run
```


Alternativement, vous pouvez [configurer un serveur web][3] comme Nginx ou Apache pour exécuter  l'application.

-----

[1]: https://symfony.com/doc/current/reference/requirements.html
[2]: https://getcomposer.org
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
