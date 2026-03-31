<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laundry Management System

This is a Laravel-based web application for managing laundry services. It includes features for managing outlets, packages, members, and transactions.

## Local Setup Instructions

To run this application on your local machine, follow these steps:

1.  **Clone the repository**.
2.  **Install PHP dependencies**:
    ```bash
    composer install
    ```
    *Note: If you are using PHP 8.x, you may need to use `composer update --ignore-platform-reqs` if you encounter version conflicts.*
3.  **Prepare the environment file**:
    ```bash
    cp .env.example .env
    ```
4.  **Configure the Database**:
    Open the `.env` file and set the following variables to use SQLite:
    ```env
    DB_CONNECTION=sqlite
    # DB_DATABASE=... (absolute path to database/database.sqlite)
    ```
5.  **Create the SQLite database file**:
    ```bash
    touch database/database.sqlite
    ```
6.  **Generate the application key**:
    ```bash
    php artisan key:generate
    ```
7.  **Run migrations and seed the database**:
    ```bash
    php artisan migrate:refresh --seed
    ```
8.  **Start the development server**:
    ```bash
    php artisan serve
    ```
9.  **Access the application**:
    Open [http://localhost:8000](http://localhost:8000) in your browser.

### Default Login Credentials
- **Role**: Admin
- **Email**: `rezamuhammad890@gmail.com`
- **Password**: `admin`

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
