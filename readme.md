# Simple Blog based on Laravel 5.3 php framework

## Installation notes
### Warning: need to update these installation notes when project is completed
> Be sure that your envirement is setup to run a laravel installation.
> Check the official laravel site for the requirements https://laravel.com/docs/5.3/installation
> Tip: I recomment Homestead (vagrantbox) 

- git clone https://github.com/pensart/Simple-laravel-blog.git

> In future releases i will provide a bash script to automate these tasks

- composer install
- mv .env.example .env
- cmd:( php artisan key:generate ) generate a key inside the .env file
- cmd: ( touch database/blog.sqlite ) to make an empte database file
- php artisan migrate (this will create the database tables)
- env: change the default first super user in the env file FSU_NAME=, FSU_EMAIL=, FSU_PSW=
- cmd: ( php artisan db:seed ) to register the first super user
- cmd: ( php artisan db:seed --class=FakeBlogWriters ) to get some fake users and posts to test
- cmd: ( php artisan migrate:refresh --seed ) = reset db and register only the first super user


## Development tips: Sass, Js, Browser sync
- Since i'm using Homestead and mapped my domain to blog.local. The gulpfile.js browsersync setting is configured to use blog.local as gateway. Change it to your own url or remove it to use locahost as your default.
- If u don't want any browserSync, just remove the .browserSync line in the gulpfile.js

## Work in progress
- [x] Fresh Laravel 5.3 installation
- [x] Create blog.sqlite file in the database directory
- [x] Configuring database to sqlite
- [x] Configuring locales (Belgian Dutch)
- [x] Added super user
- [x] Only Super Users can register new admin's
- [x] Admin users can write, update and delete posts
- [x] Author can only view, update or delete own posts
- [x] Super Users have full control over other posts
- [ ] Clean unused use classes in the controllers

# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
