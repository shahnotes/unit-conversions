# A simple unit conversion package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shahnotes/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/shahnotes/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/shahnotes/unit-conversions/Tests?label=tests)](https://github.com/shahnotes/unit-conversions/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/shahnotes/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/shahnotes/unit-conversions)


This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require shahnotes/unit-conversions
```

## Usage

```php
// Kilograms to LBS
Weight::fromKilograms(100)->toLbs();

// Celsius to Fahrenheit
Temperature::fromCelsius(100)->toFahrenheit();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Harsh Shah](https://github.com/shahnotes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
