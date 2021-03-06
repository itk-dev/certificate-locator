# Certificate Locator

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.
See deployment for notes on how to deploy the project on a live system.

### Prerequisites

* [Docker](https://docs.docker.com/install/)
* [Docker Compose](https://docs.docker.com/compose/install/)

### Installation

1. Clone the repo

   ```shell
   git clone git@github.com:itk-dev/print-service.git
   ```

2. Pull docker images and start docker containers

   ```shell
   docker-compose pull
   docker-compose up --detach
   ```

3. Install composer packages

   ```shell
   docker-compose exec phpfpm composer install
   ```

### Unit tests

```shell
docker-compose exec phpfpm vendor/bin/phpunit
```

### Coding standards

```shell
docker-compose exec phpfpm vendor/bin/php-cs-fixer fix --dry-run
```

## Deployment

```shell
composer require itk-dev/certificate-locator
```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available,
see the [tags on this repository](https://github.com/itk-dev/certificate-locator/tags).

## License

This project is licensed under the MIT License - see the
[LICENSE.md](LICENSE.md) file for details