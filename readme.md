## Small social network built on Laravel v4.2 (is similar to Twitter)

### How to install on localhost
1. Download repository and extract to any directory.
2. If you don't have Composer, please install this: ([How to install Composer?](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
3. Create *.env.php* file:
```php
<?php

return [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '1234',
    'DB_NAME' => 'larabook'
];
```
4. Create a new database *larabook* and new user *root* with *1234* password on your local DB Server (in my case MySQL Server).
5. Open your terminal, go to repository folder and type **"composer update"** in your terminal and wait few minutes.
6. Type: **"php artisan migrate"**
7. Type: **"php artisan serve"**

### How to run the tests
1. Create *.env.testing.php* file:
```php
<?php

return [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '1234',
    'DB_NAME' => 'larabook_testing'
];
```
2. Create a new database *larabook_testing*.
3. Open your terminal, go to project folder and type **"php artisan migrate --env=testing"**
4. Type **"vendor/bin/codecept run"**

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
