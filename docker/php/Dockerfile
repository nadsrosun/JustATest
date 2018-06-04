FROM php:7.1.1-apache

RUN a2enmod rewrite

RUN a2enmod headers

RUN a2enmod expires

# set extra php.ini settings
RUN { \
		echo 'date.timezone = Europe/Paris'; \
		echo 'upload_max_filesize = 256M'; \
		echo 'post_max_size = 256M'; \
		echo 'memory_limit = 512M'; \
	} > /usr/local/etc/php/conf.d/mower.ini

# add composer
RUN cd ~ \
	&& php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php \
	&& php -r "unlink('composer-setup.php');" \
	&& mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN rm -rf /etc/apache2/sites-enabled/*

COPY vhost.conf /etc/apache2/sites-enabled/

VOLUME /var/www/html




