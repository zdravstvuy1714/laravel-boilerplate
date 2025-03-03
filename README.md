# Setup & launch

1. Copy the base application configuration:
   `cp .env.example .env`
2. Installing composer dependencies for existing application:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```
3. Start the application in the background: `./vendor/bin/sail up -d`
4. Start a shell session within the application container: `./vendor/bin/sail bash`
5. Generate application key: $`php artisan key:generate`
6. Running migrations: $`php artisan migrate`
