# Use Kirim.email API in your Laravel apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-kirimemail.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-kirimemail)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-kirimemail/run-tests?label=tests)](https://github.com/sawirricardo/laravel-kirimemail/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-kirimemail/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sawirricardo/laravel-kirimemail/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-kirimemail.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-kirimemail)

Just use this to integrate with your Laravel's Mail.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-kirimemail.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-kirimemail)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-kirimemail
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-kirimemail-config"
```

This is the contents of the published config file:

```php
return [
    'username' => env('KIRIMEMAIL_USERNAME'),
    'password' => env('KIRIMEMAIL_PASSWORD'),
    'domain' => env('KIRIMEMAIL_DOMAIN'),
];
```

You are required to add this to your `mail.php`

```php
return [
    'mailers' => [
        //...

        'kirimemail' => [
            'transport' => 'kirimemail',
        ],
    ],
];
```

## Usage

```php
// make sure you set your mail to use kirimemail
config()->set(['mail.default' => 'kirimemail']);

Mail::to('test@example.com')->send(new MyMailable);
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

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
