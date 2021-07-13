# Symfony 5 App Example

## (1) Getting started

Run docker-compose and go to `http://localhost:8888`.

```bash
# Depending on where you are
docker-compose up -d
docker-compose up --build -d
docker-compose start

# Alternatively, we can start up symfony app with php command
# This is only when we don't have database.
php -S 127.0.0.1:8444 -t public
```
# new set up

```bash

docker-compose exec git config --global user.email "you@example.com"
docker-compose exec git config --global user.name "Your Name"
docker-compose exec php symfony new .
```

