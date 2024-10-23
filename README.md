## HOW TO USE

1. Prerequisites

-  Ensure you have PHP, Composer, Node.js, and npm installed on your machine.
      - composer install
      - npm install
-  Clone the repository to your local machine.
      - git clone https://github.com/DavelsML/Prakt_darbs_2.git
-  Check if the .env file exists, if not, create it, copy and paste everything into
      - APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:YNNNFqLwDtDKADsEM93LdS3TemaRGl0duXSRePdTQSs=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug


#DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=db1_prakt_darbs_2
#DB_USERNAME=root
#DB_PASSWORD=

# first Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db1_prakt_darbs_2
DB_USERNAME=root
DB_PASSWORD=

# Second Database Configuration
#DB_CONNECTION_SECOND=mysql_second
#DB_HOST_SECOND=127.0.0.1
#DB_PORT_SECOND=3306
#DB_DATABASE_SECOND=db2_prakt_darbs_2  # Second database
#DB_USERNAME_SECOND=root
#DB_PASSWORD_SECOND=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

2. Installation

- Open 3 terminal windows connected to this project.
- Navigate to your project directory in each terminal.
- Run the following commands in the respective terminals:
   -  Terminal 1: Start the Laravel development server:
php artisan serve

   -  Terminal 2: Compile your assets using npm:
npm run dev

   -  Terminal 3: Seed the database with sample data:
php artisan db:seed

3. Accessing the Application
Connect to the server shown when running php artisan serve (usually at http://127.0.0.1:8000).

4. User Instructions
- Login or Register: Create a new account or log in with existing credentials.
- Choose Database: Select either the product database or the delivery database.
- Manage Records:
   -  Create a new record.
   -  Edit an existing record.
   -  Delete a record.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>