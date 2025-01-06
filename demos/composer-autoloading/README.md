# Démo : PHP Moderne avec Composer et autoloading

Dans cette démo, les sources sont chargées automatiquement via le mécanisme d'*autoloading*. L'autoloader est généré par Composer et respecte le standard PSR-4.

## Lancer la démo

~~~bash
composer install
php index.php
~~~

## Références utiles

- [Autoloading classes](https://www.php.net/manual/en/language.oop5.autoload.php), qu'est ce que l'autoloading et  comment charger automatiquement des classes (code source) sans devoir inclure manuellement des scripts et renseigner explictement leur path;
- [PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/), spécification de stratégie d'autoloading par le PHP-FIG
