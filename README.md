# Pokedex


## Welcome! 👋

Thanks for checking out this personal project.

## Code quality

````bash
vendor/bin/php-cs-fixer fix
vendor/bin/phpstan analyse src
vendor/bin/psalm --report=var/psalm/junit.xml
vendor/bin/churn run
php bin/phpunit
XDEBUG_MODE=coverage php bin/phpunit --coverage-html=var/coverage
````



