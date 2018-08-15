# About
A simple application built on Laravel 5.6. The purpose of this is to ensure only new users are properly directed to register. 


# Setup
These steps were run on Windows Git Bash so generally would work on Mac as well. As long as the system has the prerequisites to run Laravel 5.6 Requirements can be found [here](https://laravel.com/docs/5.6#installation).

1. Open a terminal and go to the directory you would like to place this repo.

2. Clone the repo

    `git clone https://github.com/MoseyM/creative_email.git`

3. Create a new user and database for the application in MySQL. Example of doing so is below.

    ```
    mysql -u root -p

    CREATE USER 'admin'@'localhost' IDENTIFIED BY 'xxxxxxxx';

    CREATE DATABASE new_database;

    GRANT ALL PRIVILEGES ON new_database.* TO 'admin'@'localhost';
    ```

4. Copy `.env.example` to `.env` and edit the database values to use the user and database created in step 3.

    ```
    cp .env.example .env
    vi .env
    ```

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=new_database
    DB_USERNAME=admin
    DB_PASSWORD=xxxxxxxx
    ```
    Save and exit

5. Run the migration

    `php artisan migrate`

    The application is light and there is only one table being added to the database, the `Users` table. The structure:

    ```
    Users
        id: primary, integer
        name: varchar
        email: varchar
        remember_token: varchar
        created_at: timestamp
        updated_at: timestamp
    ```

6. Serve the application
    
    `php artisan serve`


