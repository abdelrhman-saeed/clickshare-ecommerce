# Task Management System API

## Installing
>
> clone the respository </h3>

```cmd

git clone https://github.com/abdelrhman-saeed/clickshare-ecommerce.git

```

> install dependencies

```cmd

cd clickshare-ecommerce

composer i

```

> setup

```cmd

cp .env.example .env

php artisan key:gen

```

> setup the database

```cmd

1- mysql -u root -p "your password"
2- create database databasename
3- exit

// edit .env file, add the database server credentials + your database name

php artisan key:gen
php artisan migrate:fresh

```

> initiate the serve

```cmd

php artisan serve

```

## Endpoints

```cmd

GET - / - homepage
GET - signing - sign in or sign up page
GET - signout - signing out endpint

POST - singin - singing in endpoint
POST - singup - singing up endpoint

GET - products - return index page for the products
GET - products/create - return product create page
GET - products/{id}/edit - return product edit page

POST - products - store product endpoint

[PUT, PATCH] - products/{id} - update product endpoint

DELETE - products/{id} - delete product endpoint

```
