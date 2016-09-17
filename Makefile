.PHONY: setup test

setup:
	curl -sS https://getcomposer.org/installer | php
	./composer.phar install

test:
	./vendor/phpunit/phpunit/phpunit --color test
