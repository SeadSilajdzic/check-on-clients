<h1>Usage</h1>

Clone the repository with git clone
Copy `.env.example` file to `.env` and edit database credentials there
Run `composer install`
Run `php artisan key:generate`
Run `php artisan migrate --seed` (it has some seeded data - see below)
That's it: launch the main URL (`php artisan serve`) and login with default credentials `client@one.com - password` or with `client@two.com - password`. <br>
This app has two roles (client and customer).
