# Containerising Symfony App

Based on this post: https://dev.to/martinpham/symfony-5-development-with-docker-4hj8

Key points

- map the entire project folder to `/var/www` in both php and nginx containers as in  `.:/var/www`.
- I don't know what it does, but `wait-for-it.sh` does the magic.
