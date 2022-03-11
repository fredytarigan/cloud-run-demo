FROM php:7.4-apache

COPY ./ /var/www/html
COPY build/config/000-default.conf /etc/apache2/sites-enabled/000-default.conf

RUN apt update \
    && apt upgrade -y \
    && apt install -y curl build-essential libssl-dev zlib1g-dev libzip-dev libonig-dev libpng-dev libjpeg-dev libfreetype6-dev libicu-dev \
    && docker-php-ext-install intl \
    && docker-php-ext-configure intl \
    # && docker-php-ext-install mysqli pdo pdo_mysql zip mbstring \
    # && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    # && docker-php-ext-install gd \
    && a2enmod rewrite \
    && chmod -R 777 /var/www/html/writable

EXPOSE 80

