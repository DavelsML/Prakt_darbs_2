## HOW TO USE

1. Prerequisites

-  Ensure you have PHP, Composer, Node.js, and npm installed on your machine.
    - Check Installation.
    ```bash
    php -v
    ```
    ```bash
    composer -v
    ```
    ```bash
    node -v
    ```
    - Install [Node.js](https://nodejs.org/en) and [Composer](https://getcomposer.org), if not installed.
    - If you are using a windows machine install [XAMPP](https://www.apachefriends.org) for mysql and apache.
-  Clone the repository to your local machine.
    ``` bash
    git clone https://github.com/DavelsML/Prakt_darbs_2.git
    ```
    - Using XAMPP, clone it into /xampp/htdocs/ via terminal window
2. Installation and running the website
- Open the Laravel project
- Make sure you install Composer and Npm locally for Laravel in a terminal window.
    ``` bash
    composer install
    ```
    ``` bash
    npm install
    ```
- Open 3 terminal windows connected to this project.
- Navigate to your project directory in each terminal.
- Run the following commands in the respective terminals:
   -  Terminal 1: Start the Laravel development server:
    ```bash 
    php artisan serve
    ```

   -  Terminal 2: Compile your assets using npm:
    ```bash
    npm run dev
    ```
   -  Terminal 3: Migrate the database and seed it database with sample data:
    ```bash
    php artisan migrate
    php artisan db:seed
    ```

3. Accessing the Application
- Connect to the server shown when running php artisan serve (usually at http://127.0.0.1:8000).

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