# infoflot-laravel

[![Latest Version](https://img.shields.io/packagist/v/cryptoweb/infoflot-laravel)](https://packagist.org/packages/cryptoweb/infoflot-laravel)
[![License](https://img.shields.io/packagist/l/cryptoweb/infoflot-laravel)](https://packagist.org/packages/cryptoweb/infoflot-laravel)

## ATTENTION!

⚠️ This package is at an early stage of development!

### basic docs:

https://restapi.infoflot.com/docs

## Description

This package is wrap for the [cryptoweb/infoflot-api](https://packagist.org/packages/cryptoweb/infoflot-api) for the Laravel

## Installation

```bash
composer require cryptoweb/infoflot-laravel
```

## Usage

Use `.env` variable:
```env
INFOFLOT_API_KEY=insert-api-key-here
```

Or publish the package config:

```bash
php artisan vendor:publish --tag=infoflot-config
```

Then, put your api key in the `config/infoflot.php`

```php
return [
	...
	'api_key' => 'insert-api-key-here',
	...
];
```

### Simple usage
```php
$cruses = infoflot()->cruises()->get();
```

### Basic usage
```php
use CryptoWeb\Infoflot\Facades\Infoflot;
// or Alias
use Infoflot;

$riverCruises = Infoflot::cruises()->type('river')->get();

/// etc...
```

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

