# Laravel Boilerplate

This is a boilerplate for Laravel so you don't have to redo what I do.
I prefer to use highly supported addons, and only onces that are necessary.

[Laravel Website](http://laravel.com)

## What's Here

- **Laravel 5.4**
    - Generated with Laravel Installer.
    - Vue 2.1
    - Bootstrap 3.7
    - jQuery 3.1
    - Lodash
- **Composer Addons:**
    - Illuminate/Pagination      (pagination for models)
    - Illuminate/Redis           (apt install redis-server)
    - Laravel/Cashier            (stripe api)
    - Laravel/Envoy              (task runner)
    - Laravel/Socialite          (social login)
    - Laravel/Tinker             (utility)
    - Intervention/Image         (image manipulation)
    - Zizaco/Entrust             (ACL Management)
    - Barryvdh/Laravel-Debugbar  (Debug Bar in Chrome Console)
- Misc:
    - sqldump.sh
        - Temporarily used for myself at the moment.
        - Single file is run manually and stored at storage/sqldump/data.sql


## Setup
This is nothing complicated, you've done it before!

### Clone the Repository:

```sh
git clone https://github.com/JREAM/laravel-boilerplate.git
```

### Copy your environment File

Copy the example and also create a new key.

```sh
cp .env.example .env
php artisan key:generate
```

### Update Composer Dependencies:

```sh
composer update
```

### Install Laravel-Mix

```sh
yarn install
```

or for npm
```sh
npm install
```

### Migrate Files
Make sure to edit your `.env` file to reflect your database connection.

```sh
php artisan migrate
```


## Make this your Repository

Flush this repositories git away:
```sh
rm -rf .git/
```

Re-init to your own repository:
```sh
git init
git remote add origin <git-url>
git add .
git commit -m "Initial Commit"
git push --set-upstream origin master
```

## Running Laravel Mix

The commands are from npm:

```sh
npm run dev
npm run watch
npm run hot      <-- You'll likely prefer hot reloading
npm run prod
```
