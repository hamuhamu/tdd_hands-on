.PHONY: setup test

setup:

test:
	./vendor/phpunit/phpunit/phpunit --color test
