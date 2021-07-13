# Symfony Docker Template Version 2

This will create docker containers to run Symfony with MySQL. 

## Get started

```bash
docker-compose up --build -d
# pattern 1 - start project locally
composer create-project symfony/skeleton ./app
cd app
composer require twig doctrine
composer require symfony/profiler-pack # Add the symfony debug toolbar
composer require symfony/maker-bundle --dev # to run all the make commands with bin/console
```

## Alternative

```bash
# pattern 2 - if you do this app will not be the part of your git repo. pattern 1 is probably better
# This will make app folder as submodule.
docker-compose exec php git config --global user.email 'your.email@whatever.com'
docker-compose exec php git config --global user.name 'Your Name'
docker-compose exec php symfony new .
docker-compose exec php composer req maker doctrine twig
```
