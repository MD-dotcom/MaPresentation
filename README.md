# Squelette Symfony avec dossier assets préparé pour app web tablet & desktop  

## Pré-requis

* avoir composer installé (gestionnaire de package php)
* avoir yarn installé (gestionnaire de packages, surcharge npm)

## Installation

Une fois cloné en local, se déplacer dans la racine du projet puis :
 
* `composer update`, installe les packages php décrits dans composer.json 
* `yarn install`, installe les packages js décrits dans package.json

Et ensuite pour travailler : 

* `./bin/console s:r` ou `./bin/console server:run`, démarre un serveur web local de développement 
h`, exécute en continu 'encore' qui agrège les js et styles* `yarn watch
 *php recommandé ¨7.3.0 pour le webpack
*Installer la doctrine "composer require symfony/orm-pack"
*Créer une classe d'entité: "php bin/console make:entity"
*Installer la dependance fixture pour pouvoir prendre facilement en charge l'ORM "composer require --dev orm-fixtures"
*creation des objets dans le fixture et les envoyer à la db avec " php bin/console doctrine:fixtures:load"
*utiliser l'interpellation {{}}  dans le template pour recuperer des données de la db pour la vue.
