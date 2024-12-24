# Gridify

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gridify/gridify.svg?style=flat-square)](https://packagist.org/packages/gridify/gridify)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gridify/gridify/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gridify/gridify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gridify/gridify/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gridify/gridify/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gridify/gridify.svg?style=flat-square)](https://packagist.org/packages/gridify/gridify)

**Gridify** is a powerful Laravel package designed to streamline the creation of dynamic tables in backend-driven applications. Define your table structure in the backend and dynamically render it on the frontend using JSON, Blade, or Inertia views.

## Installation

You can install the package via composer:

```bash
composer require duobix/gridify
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="gridify-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="gridify-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="gridify-views"
```

## Usage

```php
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Abdennour Tadjer](https://github.com/AbdenourTadjer33)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
