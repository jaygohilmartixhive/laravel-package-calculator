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
        "devjay/calculator": "dev-master"
    }
}
```

And run `composer update`, `composer dump-autoload`

Then add Service provider to `config/app.php`

``` php
    'providers' => [
        // ...
        Devjay\Calculator\CalculatorServiceProvider::class,
    ]
```

#### Shortcut methods for common request methods

For the `GET` request methods shortcut methods are available. For example:

```php
Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
```

For Adding two value 'a' and 'b' the `GET` request methods is called shown as below:
```php
Route::get('add/{a}/{b}', 'Devjay\Calculator\CalculatorController@add');
```

For Substracting two value 'a' and 'b' the `GET` request methods is called shown as below:
```php
Route::get('subtract/{a}/{b}', 'Devjay\Calculator\CalculatorController@subtract');

```
