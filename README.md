# Laravel Typed Request

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pi-space/laravel-typed-request.svg?style=flat-square)](https://packagist.org/packages/pi-space/laravel-typed-request)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/pi-space/laravel-typed-request/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/pi-space/laravel-typed-request/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/pi-space/laravel-typed-request/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/pi-space/laravel-typed-request/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pi-space/laravel-typed-request.svg?style=flat-square)](https://packagist.org/packages/pi-space/laravel-typed-request)

Laravel Typed Request is a package that enhances Laravel Form Request by introducing **Typed Classes and Attribute-based Validation Rules**.

This package provides a seamless way to create type-safe request classes, resulting in **improved code readability and enhanced IDE support**.

## Features

- Define Typed **Form Request classes** with **attribute-based validation rules**.
- Improved **code readability and maintainability**.
- Enhanced **IDE support for auto-completion and error checking**.

## Installation

You can install the package via composer:

```bash
composer require pi-space/laravel-typed-request
```

## Usage

### Creating Typed Form Request Classes

Laravel Typed Request simplifies the process of creating Typed Form Request classes. Let's take an example of creating an `ArticleRequest` class:

1. To create a typed request class, use the following Artisan command:

```bash
php artisan make:typed-request ArticleRequest
```

2. Open the generated `app/Http/Requests/ArticleRequest.php` file and update it as follows:

```php
namespace PiSpace\LaravelTypedRequest\Tests\Requests;

use PiSpace\LaravelTypedRequest\Rules\Date;
use PiSpace\LaravelTypedRequest\Rules\MaxLength;
use PiSpace\LaravelTypedRequest\Rules\Nullable;
use PiSpace\LaravelTypedRequest\Rules\Required;
use PiSpace\LaravelTypedRequest\Rules\RequiredIfPatch;
use PiSpace\LaravelTypedRequest\Rules\StringValue;
use PiSpace\LaravelTypedRequest\TypedFormRequest;

class ArticleRequest extends TypedFormRequest
{
    #[Required, StringValue, MaxLength(255)]
    public readonly string $title;
    #[Required, StringValue, MaxLength(255)]
    public readonly string $body;
    #[Nullable, Date, RequiredIfPatch]
    public readonly ?string $published_at;
}
```

### Important Notes

- The typed request class must extend the `PiSpace\LaravelTypedRequest\TypedFormRequest` class.
- All properties in the typed request class must be `readonly`.

### Available Rules

- All available rules are located in the `PiSpace\LaravelTypedRequest\Rules` namespace. These rules are attribute-based and are similar to Laravel validation rules.
- You can create custom rules by extending the `PiSpace\LaravelTypedRequest\Rules\RuleAttribute` class.
- For example, the `RequiredIfPatch` rule checks if the request method is `PATCH`, making the attribute required only in that case.
- You have access to the request instance inside custom rule classes, allowing you to access request data.

### Creating a Custom Rule

Let's create a custom rule called `RequiredIfPatch`:

1. To create the custom rule class, use the following Artisan command:

```bash
php artisan make:rule-attribute RequiredIfPatch
```

2. Open the generated `app/Rules/RequiredIfPatch.php` file and update it as follows:

```php
#[Attribute]
class RequiredIfPatch extends RuleAttribute
{
    public function rule(): \Illuminate\Validation\Rules\RequiredIf
    {
        return Rule::requiredIf(fn() => $this->request->isMethod('PATCH'));
    }
}
```

Now you can use the `RequiredIfPatch` rule in your typed request classes.

## Changelog

For a detailed list of changes, see the [CHANGELOG](CHANGELOG.md).

## Contributing

We welcome contributions! Please see [CONTRIBUTING](CONTRIBUTING.md) for details on how to get involved.

## Security Vulnerabilities

If you discover any security vulnerabilities, please review [our security policy](../../security/policy) on how to report them.

## Credits

- [Eyad Hamza](https://github.com/Eyadhamza)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). See [License File](LICENSE.md) for more information.
```

I've enhanced the documentation further, providing clearer instructions for creating typed request classes and custom rules. Please review the updated version and let me know if there are any specific changes you'd like to make or if you have any additional information to include.
