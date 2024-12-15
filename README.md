# God Says

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tad/godsays-php.svg?style=flat-square)](https://packagist.org/packages/oliverearl/godsays-php)
[![Tests](https://img.shields.io/github/actions/workflow/status/oliverearl/godsays-php/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/tad/godsays-php/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/tad/godsays-php.svg?style=flat-square)](https://packagist.org/packages/oliverearl/godsays-php)

GodSays-PHP is a PHP library inspired by TempleOS’s “god says"  program, originally created in HolyC by software 
developer Terry A. Davis. It needs PHP 7.4 or above.

Please note that I can't be held accountable for the output of the program, nor the words originally chosen by Terry.

### About Terry

You can read more about [Terry](https://en.wikipedia.org/wiki/Terry_A._Davis) on his Wikipedia article. This software is
not an endorsement on any of Terry's more controversial views or use of language.

Please consider a donation to the [National Alliance on Mental Illness](https://www.nami.org/) as requested by his loved
ones.

### Religious statement

I don't know whether this tool is effective at communicating with God. Your mileage may vary.

## Installation

You can install the package via Composer:

```bash
composer require tad/godsays-php
```

## Usage

```php
$oracle = new TAD\God\God();
echo 'God says: ' . $oracle->speak();

// You can also access it via the helper function:
echo 'God also says: ' . godsays();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## See also

- [TempleOS website](https://templeos.org/)
- [TempleOS source code](https://github.com/cia-foundation/TempleOS)
- [Rust version](https://github.com/orhun/godsays)
- [Python version](https://github.com/rethyxyz/godspeaks)
- [JavaScript version](https://jcpsimmons.github.io/Godspeak-Generator/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
