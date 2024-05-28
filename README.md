# Laravel  Project

## Installation

Follow these steps to set up the Laravel application:

- Update Database Details
- Open the .env file and update the following lines to match your database configuration:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

- Run Composer install
  composer install

- Run Migrations
- Run the database migrations to create the necessary tables:
    php artisan migrate

- Seed the Database
- Run the following commands to seed the database with initial data:
    php artisan db:seed --class=ProductsTableSeeder

- Running the Application
- You can now run the application using the built-in PHP server:
    php artisan serve
    
## Additional Commands

- Clearing Cache
    php artisan cache:clear
- Clearing Config Cache
    php artisan config:clear
- Clearing Route Cache
    php artisan route:clear
