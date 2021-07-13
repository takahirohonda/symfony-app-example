# Symfony 5 App Example

## (1) Getting started

Run docker-compose and go to `http://localhost:9080`.

```bash
# first time
docker-compose up -d
docker-compose exec git config --global user.email "you@example.com"
docker-compose exec git config --global user.name "Your Name"
docker-compose exec php symfony new .
docker-compose exec php composer req maker doctrine twig
```

