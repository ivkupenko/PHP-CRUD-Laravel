FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install opcache mysqli pdo pdo_mysql zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./docker/php/conf.d/99-xdebug.ini /usr/local/etc/php/conf.d/99-xdebug.ini

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite \
    && sed -ri -e 's!/var/www/html!/var/www/html/laravel/public!g' /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

WORKDIR /var/www/html

EXPOSE 80