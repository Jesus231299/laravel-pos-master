<p align="center">
    <h1 align="center">Proyectol</h1>
</p>

## Installation

### Clone the repository from github.

    git clone https://github.com/angkosal/laravel-pos.git [YourDirectoryName]

The command installs the project in a directory named `YourDirectoryName`. You can choose a different
directory name if you want.

### Install dependencies

Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

    cd YourDirectoryName
    composer install

### Config file

Rename or copy `.env.example` file to `.env` 1.`php artisan key:generate` to generate app key.

1. Set your database credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file.

### Database

1. Migrate database table `php artisan migrate`
1. Generate config `php artisan db:seed`

### Install Node Dependencies(optional)

1. `npm install` to install node dependencies
1. `npm run dev` to build our javascript

### Create Admin Account

1. `php artisan tinker` and than paste
    ```php
    App\Models\User::create([
        'first_name' => 'Admin',
        'last_name' => 'admin',
        'email'=>'admin@gmail.com',
        'password' => bcrypt('admin')
    ]
    ```
    hit enter.

### Create storage link

`php artisan storage:link`
