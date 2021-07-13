# Symfony Docker Template Version 2

This will create docker containers to run symfony with MySQL. 

## Get started

```bash
docker-compose up --build -d
# pattern 1 - start project locally
composer create-project symfony/skeleton ./app
cd app
composer require twig doctrine

# pattern 2 - if you do this app will not be the part of your git repo. pattern 1 is probably better
docker-compose exec php git config --global user.email 'your.email@whatever.com'
docker-compose exec php git config --global user.name 'Your Name'
docker-compose exec php symfony new .
docker-compose exec php composer req maker doctrine twig
```
