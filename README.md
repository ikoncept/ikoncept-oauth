# authenticate via ikoncept/oauth

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ikoncept/ikoncept-oauth.svg?style=flat-square)](https://packagist.org/packages/ikoncept/ikoncept-oauth)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ikoncept/ikoncept-oauth/run-tests?label=tests)](https://github.com/ikoncept/ikoncept-oauth/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ikoncept/ikoncept-oauth/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ikoncept/ikoncept-oauth/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ikoncept/ikoncept-oauth.svg?style=flat-square)](https://packagist.org/packages/ikoncept/ikoncept-oauth)



## Installation

You can install the package via composer:

```bash
composer require ikoncept/ikoncept-oauth
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Ikoncept\IkonceptOauth\IkonceptOauthServiceProvider" --tag=config
```


Add the following to your `config/services.php`-file

```php
'ikoncept' => [
    'client_id' => env('IKONCEPT_CLIENT_ID'),
    'client_secret' => env('IKONCEPT_CLIENT_SECRET'),
    'redirect' => env('IKONCEPT_CLIENT_REDIRECT'),
]
```

This is the contents of the published config file:

```php
return [
    'client_id' => env('IKONCEPT_CLIENT_ID'),         // Your Ikoncept Client ID
    'client_secret' => env('IKONCEPT_CLIENT_SECRET'), // Your Ikoncept Client Secret
    'redirect' => env('IKONCEPT_CLIENT_REDIRECT'),
    'user_model' => env('IKONCEPT_USER_MODEL', \App\Models\User::class)
];
```

Add the following to your `.env` file
```
IKONCEPT_CLIENT_ID
IKONCEPT_CLIENT_SECRET
IKONCEPT_CLIENT_REDIRECT
```

## Testing

```bash
composer test
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
