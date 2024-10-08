## Application setup & launch
1. Copy the base application configuration:
   `cp .env.example .env`
2. Installing composer dependencies for existing application:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
3. Launch application: `./vendor/bin/sail up -d`
4. Generate application key: `./vendor/bin/sail php artisan key:generate`
5. Running migrations: `./vendor/bin/sail php artisan migrate`
