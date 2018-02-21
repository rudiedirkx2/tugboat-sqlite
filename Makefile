tugboat-init: install-server install-composer install-project

install-server:
	ln -sf ${TUGBOAT_ROOT} /var/www/html
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

install-composer:
	php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	php composer-setup.php --install-dir=/usr/bin --filename=composer
	php -r "unlink('composer-setup.php');"

install-project:
	php -r "file_exists('env.php') or copy('env.php.orig', 'env.php');"
