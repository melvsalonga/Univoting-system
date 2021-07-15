## UniVote - Universal Voting System

<div align="center"><img src="https://i.ibb.co/Qp1cYZr/UNIVOTE-LOGO.png" alt="UNIVOTE-LOGO" width="400"></div>

### Your Vote, Your Voice
### LET'S YOUR VOICE BE HEARD
A Simple Voting System which can be use by all.

(Scroll Down for Installation Instruction.)


## Features

* User Authentication (Jetstream)

* User upload profile img, change password, log out on all session

* Two Factor Authentication (Scan given Qr code using any authenthicator like Google authenthicator)

* Customizable Admin panel (Using Voyager - The missing admin panel for Laravel)

* Account Roles (Voter, Admin)

* Ajax search and pagination (Admin Panel)

## Instruction

* git clone https://github.com/Focilia/Univoting-system.git

* composer install or composer update

* make a database name voting_system_test or a name of your choice

* modify the .env file with the name of database you created.

* or you can copy the .env.example and paste to .env

* php artisan key:generate

* php artisan migrate

* php artisan serve

* then you can access the site with this link http://localhost:8000/

## Admin Panel

* you can access the admin panel with this link http://localhost:8000/admin

#### this is the default account for the admin panel:

Email: admin@admin.com

Pass : password

## Adding Candidate

* you can access the add candidate with this link http://localhost:8000/createCandidateForm

#### Note: you need to be a admin to access this link


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.dsgfdsg