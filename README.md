## Dicount Calculator

### Getting Started
- Clone this repository `$ git clone https://github.com/jmusila/discount_calc.git`
- Navigate to the cloned repository

### Prerequisites
```
PHP 7.4+
MySQL
Composer

```

### Installation
- After cloning this repo:
    - Create .env on the root directory and copy .env_exmaple content to it
    - Create database and add database configurations on the .env file
    - Run `$ composer install` to install dependancies
    - Run `$ php artisan key:generate` to generate app key
    - Run `$ php artisan db:seed` to seed the database

### Testing on Postman
- Run `$ php artisan serve` to start the server
- Test the following endpoint:

| EndPoint                       | Functionality                           |
| -------------------------------|:---------------------------------------:|
| POST /api/payment_calculation  | Returns Discounted Total Cost           |
|                                                                          |
    