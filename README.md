# Product CRUD

A simple Laravel CRUD application for managing brands and products.

## Features

### Brand Management

* Add brand
* Store brand
* Edit brand
* Update brand
* Delete brand
* Display brands

### Product Management

* Add product
* Store product
* Edit product
* Update product
* Delete product
* Display products

## Technologies Used

* PHP
* Laravel
* MySQL
* HTML
* CSS
* Bootstrap
* Git
* GitHub

## Database Relationship

A brand can have multiple products.

```text
Brand
  |
  | hasMany
  v
Products
```

Each product belongs to one brand.

## Laravel Concepts

* Routes
* Controllers
* Models
* Blade
* Migrations
* Eloquent ORM
* CRUD operations
* Form validation
* Database relationships
* Foreign keys

## Project Status

* [x] Brand Add
* [x] Brand Store
* [ ] Brand Edit
* [ ] Brand Update
* [ ] Brand Delete
* [ ] Product CRUD

## Purpose

This project is created for Laravel development practice and to learn Git and GitHub workflow.

## Installation

Clone the repository:

```bash
git clone https://github.com/mgsuljith25-oss/product-crud.git
```

Go to the project:

```bash
cd product-crud
```

Install dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database in `.env`, then run:

```bash
php artisan migrate
```

Start the application:

```bash
php artisan serve
```

## License

This project is for learning and practice purposes.
