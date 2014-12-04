Bitstop
==========


Setup
-----

Download codekit and add project to it

	https://incident57.com/codekit/

You must have `composer` installed in your path.

###Ubuntu: 

	curl -sS https://getcomposer.org/installer | php
	sudo mv composer.phar /usr/local/bin/composer
	
###Mac: 
	brew install composer


Install dependencies

	composer install

Copy .env
	
	cp .env-example .env


To run locally i recommend MAMP