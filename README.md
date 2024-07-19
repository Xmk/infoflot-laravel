# infoflot-laravel

[![Latest Version](https://img.shields.io/packagist/v/cryptoweb/infoflot-laravel?style=for-the-badge)](https://packagist.org/packages/cryptoweb/infoflot-laravel)
[![License](https://img.shields.io/packagist/l/cryptoweb/infoflot-laravel?style=for-the-badge)](https://packagist.org/packages/cryptoweb/infoflot-laravel)

> [!WARNING]
>
> This package is at an early stage of development!

## Description

Laravel Package for fast and easy access to Infoflot API.
This package is wrap for the [cryptoweb/infoflot-api](https://packagist.org/packages/cryptoweb/infoflot-api) for the Laravel

> [!NOTE]
>
> Basic documentation: https://restapi.infoflot.com/docs

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

### Usage with helper method
```php
$riverCruises = infoflot()->cruises()->type('river')->get();
```

### Usage with facade
```php
use CryptoWeb\Infoflot\Facades\Infoflot;
// or Alias
use Infoflot;

$riverCruises = Infoflot::cruises()->type('river')->get();

/// etc...
```

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

