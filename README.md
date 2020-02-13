# ToDoList

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f8ba6e03251648048920ac80c27ffa04)](https://app.codacy.com/manual/IVAN-URBACZKA/todo-co?utm_source=github.com&utm_medium=referral&utm_content=IVAN-URBACZKA/todo-co&utm_campaign=Badge_Grade_Dashboard)

## Base du projet #8 : Améliorez un projet existant

### https://openclassrooms.com/projects/ameliorer-un-projet-existant-1

#### Installation

##### Cette application a été développée avec le framework [Symfony](https://symfony.com/)

###### Cloner le projet pour installer son contenu
https://github.com/IVAN-URBACZKA/todo-co.git

###### Utiliser Composer pour installer les dépendances dans le dossier vendor
```
composer install
```


###### Créer la database
```
bin/console doctrine:database:create
```


###### Importer les tables dans la database
```
bin/console doctrine:schema:update --force
```


###### (optional) Load the fixtures
```
bin/console doctrine:fixtures:load'
```


###### Testing
Lancer les tests avec phpunit
```
vendor\bin\phpunit test
```

# Contribuer
[Consulter CONTRIBUTING.md](https://github.com/IVAN-URBACZKA/todo-co/blob/master/CONTRIBUTING.md)
