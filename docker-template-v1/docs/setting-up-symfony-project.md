# Setting up Symfony project

This is how this project was set up. Obviously we need to have PHP and composer installed.

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
