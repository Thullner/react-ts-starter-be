**Installation**

1. Make sure you have php 7.2 or higher (check with `php -v`), composer,
   node, npm and postgres installed
2. Clone the project repo to your local device
3. Copy the .env.example file and rename it .env
4. Run `composer install`
5. Create a database with postgres
    - Add the database name, user and password to the .env
6. Run `php artisan key:generate`
7. Run `php artisan migrate --seed`

**Update during development**

1. Run `git pull`
2. Run `composer dumpautoload`
3. Run `php artisan migrate:fresh --seed`
4. Run `php artisan serve`

**Run the project**

1. Run `php artisan serve`, hosted at: http://127.0.0.1:8000
