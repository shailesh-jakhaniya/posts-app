<h1 align="center">Simple Posts Manage Application</h1>

## System Requirements

The following are required to function properly.

*   Laravel Version: ^10.10
*   PHP Version: 8.2.9
*   Composer Version: 2.5.8
*   Node Version: 18.18.0

## About Project

This project is authentication with posts management.

## Install

You can create new Air cleaning project using git clone

	git clone "https://github.com/shailesh-jakhaniya/posts-app.git"

After the project is created run the following commands

	cd posts-app

Fetch the all code from remote branches to local branches

	git fetch --all

Assuming you've already installed composer on your machine: 2.4.4, [Composer](https://getcomposer.org)

    composer self-update or composer self-update --2

Install the dependencies using composer

	composer install

Install the dependencies using npm

	npm install

    npm run dev

Copy the environment from .env.example to .env and add database connection

    cp .env.example .env

Then generate application key

    php artisan key:generate

#### Update configuration File

we need to add set configuration on env file and database configuration file. you you need to set env file with check database configuration.

Let's updated files:

.env

```env

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Then run the migrations

    php artisan migrate

Now you can run project

Start the local development server

    php artisan serve

	You can now access the server at http://localhost:8000

Or You can create virtual host and execute the project in your local system.
