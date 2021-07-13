
```bash
docker-compose up --build -d

docker-compose exec php git config --global user.email 'your.email@whatever.com'
docker-compose exec php git config --global user.name 'Your Name'
docker-compose exec php symfony new .
docker-compose exec php composer req maker doctrine twig
```
