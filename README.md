# Symfony 5 App Example

# REFERENCE

## (1) Installation

We need PHP and composer to be installed. See docs for further info: https://symfony.com/doc/current/setup.html

First, start a project with the command below:

```bash
composer create-project symfony/skeleton my-project

# requirement checker - this will install all the packages required to run symfony
composer require symfony/requirements-checker

# install twig with alias (symfony flex makes installation with alias possible)
composer require symfony/flex
composer require twig
composer require doctrine
# Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code. 
composer require maker
```

## (2) Running App Locally

We can start up symfony app with php command

```bash
php -S 127.0.0.1:8444 -t public
```

## (2) Setting up Docker

Based on this blog post: https://dev.to/martinpham/symfony-5-development-with-docker-4hj8
