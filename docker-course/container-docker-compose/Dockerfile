FROM php:7.4-apache


RUN apt-get -y update \
&& docker-php-ext-install mysqli

COPY . /var/www/html

CMD ["apachectl", "-D", "FOREGROUND"]