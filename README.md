# Pokedex

[![ci](https://github.com/Munegu/pokedex-symfony/actions/workflows/ci.yml/badge.svg)](https://github.com/Munegu/pokedex-symfony/actions/workflows/ci.yml)

## Welcome! 👋

Thanks for checking out this personal project.

## Code quality

````bash
vendor/bin/php-cs-fixer fix
vendor/bin/phpstan analyse src
php bin/phpunit
XDEBUG_MODE=coverage php bin/phpunit --coverage-html=var/coverage
