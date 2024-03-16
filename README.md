## Prerequired
PHP VERSION 8.2^

## Instalasi
Composer update

Rename env.example to env

Edit env

DB_DATABASE=filament_roles
DB_USERNAME=root
DB_PASSWORD=

ubah sesuai kebutuhan

php artisan migrate --seed

## Running
php artisan serve
