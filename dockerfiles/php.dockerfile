FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

RUN 

RUN apk add --no-cache \
    zlib-dev libzip libpng libjpeg-turbo libwebp freetype \
    libjpeg-turbo-dev libzip-dev libpng-dev libwebp-dev $PHPIZE_DEPS

RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd mysqli pdo_mysql zip \
    && pecl install redis \
    && docker-php-ext-enable redis

RUN apk del $PHPIZE_DEPS

COPY src/ .

RUN chown -R www-data:www-data /var/www/html
USER www-data