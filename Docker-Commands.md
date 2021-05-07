## (2) Setting up Docker

Based on this blog post: https://dev.to/martinpham/symfony-5-development-with-docker-4hj8


## In progress

Testing docker with apache

```bash
docker-compose -f docker-compose-apache.yml up -d
docker-compose -f docker-compose-apache.yml down

# rebuild as files get updated
docker-compose -f docker-compose-apache.yml up --build -d

# check container
docker exec -it symfony-app-example_app_1 bash

# Trying to run migration
docker-compose -f docker-compose-apache.yml  exec app bin/console doctrine:migrations:migrate
```

With nginx

```bash

```
