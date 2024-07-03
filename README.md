# infoflot-laravel

basic docs:

https://restapi.infoflot.com/docs

## Description

This package is laravel wrap for the [cryptoweb/infoflot-api](https://packagist.org/packages/cryptoweb/infoflot-api)

## Installation

```bash
composer require cryptoweb/infoflot-api
```

## Usage

Publish the package config:

```bash
php artisan vendor:publish tag=infoflot-config
```

Then, put your api key in the `config/infoflot.php`

```php
return [
	...
	'api_key' => 'insert-api-key-here',
	...
];
```

### Basic usage
```php
use CryptoWeb\Infoflot\Facades\Infoflot;
// or alias
use Infoflot;

$riverCruises = Infoflot::cruises()->type('river')->get();

/// etc...
```

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

