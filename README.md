# laravel-package-calculator
A demo package for Laravel calculator

## Installation

### Using Composer

```sh
composer require devjay/calculator
```

Or manually by modifying `composer.json` file:

``` json
{
    "require": {
        // ...
        "devjay/calculator": "dev-master"
    }
}
```

And add manually by modifying `composer.json` file:

``` json
    "autoload": {
        "psr-4": {
            // ...
            "Devjay\\Calculator\\": "packages/devdojo/calculator/src"
        },
        "classmap": [
            // ...
            "database"
        ]
    },
```

And run `composer install`

Then add Service provider to `config/app.php`

``` php
    'providers' => [
        // ...
        Devjay\Calculator\CalculatorServiceProvider::class,
    ]
```
