.PHONY: setup test

setup:
	composer install

test:
	./vendor/phpunit/phpunit/phpunit --color test
