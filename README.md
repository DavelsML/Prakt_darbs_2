# Laravel Breeze Project (2. praktiskais darbs)

This is a Laravel Breeze project. Follow the steps below to get it up and running on your local machine using XAMPP.

## Requirements

- PHP >= 8.0
- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/index.html) (For local development)
- [Node.js & npm](https://nodejs.org/) (For frontend assets)

## Installation

### 1. Clone the Repository
First, navigate to your XAMPP `htdocs` folder and clone this repository:
```bash
cd C:/xampp/htdocs
git clone https://github.com/DavelsML/Prakt_darbs_2
cd Prakt_darbs_2
```

### 2. Install PHP Dependencies

Run the following command to install the necessary PHP dependencies:
```bash
composer install
```

### 3. Set Up Environment Variables

Since ```.env``` has not been added to ```.gitignore``` due to simplicity (very professional, we know), the main focus should be on this part:
```bash
# first Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db1_prakt_darbs_2
DB_USERNAME=root
DB_PASSWORD=
```

When creating the database at phpMyAdmin, the database name should be the same as here (db1_prakt_darbs_2).

### 4. Generate Application Key

Run the following command to generate a new application key:

```bash
php artisan key:generate
```

### 5. Set Up the database

Create a new database using phpMyAdmin, and then run migrations to set up the tables:
```bash
php artisan migrate
```

### 6. Install Frontend Dependencies

Since we are using Laravel Breeze with a frontend framework, you will need to install the JavaScript dependencies:

```bash
npm install
```

Then, compile the assets:

```bash
npm run dev
```

### 7. Populate the Database with Seeder (Optional)

Since the project has a built-in seeder, you can run it using:

```bash
php artisan db:seed
```

### 8. Serve the Application

Finally, run the following command to start the Laravel development server:

```bash
php artisan serve
```

You can now access the project at ```http://localhost:8000```.

## License

This project is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>