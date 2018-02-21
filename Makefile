tugboat-init:
	ln -sf ${TUGBOAT_ROOT} /var/www/html
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
	pwd
	cd /var/www/html
	pwd
	php -r "file_exists('env.php') or copy('env.php.orig', 'env.php');"
	# composer install
