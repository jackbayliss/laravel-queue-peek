#  Laravel Queue Peek
A read-only Artisan command to peek at jobs sitting in your Laravel queues. No tinker, no application needed.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jackbayliss/laravel-queue-peek.svg?style=flat-square)](https://packagist.org/packages/jackbayliss/laravel-queue-peek)
[![GitHub Tests Action Status](https://github.com/jackbayliss/laravel-queue-peek/actions/workflows/run-tests.yml/badge.svg)](https://github.com/jackbayliss/laravel-queue-peek/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://github.com/jackbayliss/laravel-queue-peek/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/jackbayliss/laravel-queue-peek/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)

A read-only Artisan command for peeking at the jobs sitting in your Laravel queues, without dequeuing them.

## Requirements

This package relies on the queue inspection methods (`pendingJobs`, `delayedJobs`, `reservedJobs`) introduced in Laravel 13, so it only supports Laravel 13+.

## Installation

You can install the package via composer:

```bash
composer require jackbayliss/laravel-queue-peek
```

## Usage

```bash
php artisan queue:peek
```

By default this peeks at the pending jobs on the default queue connection. You can customise the connection, queue, state, and output:

```bash
php artisan queue:peek redis --queue=high --state=delayed --limit=10 --json
```

| Option | Description |
| --- | --- |
| `connection` | The queue connection to inspect (defaults to `queue.default`). |
| `--queue` | The name of the queue to inspect. |
| `--state` | One of `pending`, `delayed`, or `reserved` (default: `pending`). |
| `--limit` | The maximum number of jobs to display (default: `25`). |
| `--json` | Output the jobs as JSON. |

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

- [Jack Bayliss](https://github.com/jackbayliss)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
