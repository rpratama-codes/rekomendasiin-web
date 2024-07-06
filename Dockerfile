FROM php:7.4.33-zts-alpine3.16 AS builder
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
COPY . /app
WORKDIR /app
RUN apk add git 
RUN composer install

# this image is huge than the builder 
# any recomendation to use php, apache, alpine
FROM php:7.4.33-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
COPY --from=builder --chown=www-data:www-data /app /var/www/html
USER www-data
