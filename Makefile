.PHONY: setup test

setup:
	sudo apt-get install -y curl
	curl -sS https://getcomposer.org/installer | php
	./composer.phar install

test:
	./vendor/phpunit/phpunit/phpunit --color test
