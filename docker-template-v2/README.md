
```bash
docker-compose up --build -d

docker-compose exec php /bin/bash
```

Now you should be in a terminal in your container:
```bash
git config --global user.email 'your.email@whatever.com'
git config --global user.name 'Your Name'

symfony new .

composer req maker doctrine twig
```
