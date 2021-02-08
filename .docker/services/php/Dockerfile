FROM php:8.0-fpm-buster

WORKDIR /var/www/html

COPY ./ /var/www/html

COPY .docker/services/php/php-fpm.d/www.conf /etc/php/8.0/fpm/pool.d/

RUN apt-get update && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    usermod -u 1000 www-data && \
    chown -R www-data:www-data /var/www && \
    mkdir -p /var/lib/php/session && \
    chmod o+rw /var/lib/php/session && \
    chown www-data:www-data /var/lib/php/session
ENV COMPOSER_ALLOW_SUPERUSER 1
COPY .docker/services/php/php.ini /usr/local/etc/php/php.ini
CMD ["php-fpm"]

