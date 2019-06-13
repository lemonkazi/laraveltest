FROM php:7.3-apache


RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite

ADD . /var/www
ADD ./public /var/www/html

ADD config/docker/apache.conf /etc/apache2/httpd.conf
COPY config/docker/php.ini /usr/local/etc/php/

EXPOSE 80