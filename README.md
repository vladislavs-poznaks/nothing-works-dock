
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Dockerfiles for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nothing-works/nothing-works-dock.svg?style=flat-square)](https://packagist.org/packages/nothing-works/dock)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/nothing-works/dock/run-tests?label=tests)](https://github.com/nothing-works/nothing-works-dock/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/nothing-works/nothing-works-dock/Check%20&%20fix%20styling?label=code%20style)](https://github.com/nothing-works/nothing-works-dock/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nothing-works/dock.svg?style=flat-square)](https://packagist.org/packages/nothing-works/dock)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/nothing-works-dock.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/nothing-works-dock)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require nothing-works/dock
```

You can run the docker-compose.yml installation via artisan:

```bash
php artisan dock:install
```

Optionally, you can publish and adjust dockerfiles via artisan if needed:

```bash
php artisan dock:publish
```

## Usage

You can run the server:

```bash
docker compose up -d nginx
```

You can run a specific container with related commands:

```bash
docker compose run --rm <CONTAINER> command
```

Available containers: 
 - **composer**
 - **artisan**
 - **phpunit**
 - **npm**

### Examples:

```bash
docker compose run --rm composer --version
```
```bash
docker compose run --rm artisan inspire
```
```bash
docker compose run --rm phpunit
```
```bash
docker compose run --rm npm run prod
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/vladislavs-poznaks/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Vladislavs Poznaks](https://github.com/vladislavs-poznaks)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

### ROADMAP

- Add testing DB to mysql container

- Update binary to be able:
* run docker-compose commands via /vendor/bin/dock
* run docker(?) commands via /vendor/bin/dock
* run composer & artisan containers prior docker-compose.yml creation (containers created on the fly, after command is executed - removed)

